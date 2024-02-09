<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;

class Forgot extends Component
{
    public function render()
    {
        return view('livewire.auth.admin.forgot')->layout('components.layouts.auth');
    }
}
