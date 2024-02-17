<?php

namespace App\Livewire\User\Blog;

use Livewire\Component;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class Add extends Component
{
    public $category_id;
    public $name;
    public $tags;
    public $description;
    public $photo;

    public function render()
    {
        return view('livewire.user.blog.add');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'category_id' => 'required',
            'name' => 'required',
            'tags' => 'nullable',
            'description' => 'required',
            'photo' => 'required|image',
        ]);
        dd(2020);

        // Store the photo
        $photoPath = $this->photo->store('blog_photos', 'public');

        // Create the blog record
        $blog = Blog::create([
            'user_id' => Auth::id(),
            'category_id' => $this->category_id,
            'name' => $this->name,
            'tags' => $this->tags,
            'description' => $this->description,
            'photo' => $photoPath,
        ]);

        // Reset form fields
        $this->reset();

        // Redirect or show a success message
        // Example:
        // return redirect()->route('blog.show', $blog->id);
    }
}

