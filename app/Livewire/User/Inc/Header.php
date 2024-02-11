<?php

namespace App\Livewire\User\Inc;

use Livewire\Component;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class Header extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.user.inc.header');
    }
}
