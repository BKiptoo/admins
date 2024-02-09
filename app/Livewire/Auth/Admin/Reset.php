<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;

class Reset extends Component
{
    public function render()
    {
        return view('livewire.auth.admin.reset')->layout('components.layouts.auth');
    }
}
