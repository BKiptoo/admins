<?php

namespace App\Livewire\User\Blog;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class BlogAdd extends Component
{
    use WithFileUploads;

    public $category_id;
    public $name;
    public $tags;
    public $description;
    public $photo;

    protected $rules = [
        'category_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'photo' => 'required|image|max:1024', // assuming maximum file size is 1MB
    ];

    public function submit(): void
    {
        $this->validate();

        // Store the photo
        $photoPath = Storage::disk('local')->putFile('temp/blog', $this->photo);

        // Create the blog record
        Blog::create([
            'user_id' => Auth::id(),
            'category_id' => $this->category_id,
            'name' => $this->name,
            'tags' => $this->tags,
            'description' => $this->description,
            'photo' => $photoPath,
        ]);

        // Reset form fields
        $this->reset();

        session()->flash('message', 'Blog post created successfully.');
    }

    public function render()
    {
        return view('livewire.user.blog.add_blog');
    }
}
