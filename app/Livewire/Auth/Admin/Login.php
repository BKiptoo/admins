<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.admin.login')->layout('components.layouts.auth');
    }
}
