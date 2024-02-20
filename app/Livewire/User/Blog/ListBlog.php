<?php

namespace App\Livewire\User\Blog;

use Livewire\Component;
use App\Models\Blog;

class ListBlog extends Component
{
    public $blogs;
    public $search;

    public function loadData(): void
    {
        $query = Blog::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        $this->blogs = $query->orderBy('id', 'asc')->get();
    }

    public function mount()
    {
        $this->blogs = Blog::all();
    }

    public function render()
    {
        return view('livewire.user.blog.list-blog', [
            'blogs' => $this->blogs,
        ]);
    }
}
