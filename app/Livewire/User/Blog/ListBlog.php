<?php

namespace App\Livewire\User\Blog;

use Livewire\Component;
use App\Models\Blog;

class ListBlog extends Component
{
    public $blogs;

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
