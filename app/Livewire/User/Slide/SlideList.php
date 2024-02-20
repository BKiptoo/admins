<?php

namespace App\Livewire\User\Slide;

use Livewire\Component;
use App\Models\Slide;

class SlideList extends Component
{
    public $slides;
    public $search = '';

    public function loadData(): void
    {
        $query = Slide::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        $this->slides = $query->orderBy('id', 'asc')->get();
    }



    public function updatedSearch()
    {
        // BlogAdd debouncing logic here if needed
        $this->loadData();
    }

    public function render()
    {
        $this->loadData();

        return view('livewire.user.slide.slide-list');
    }
}
