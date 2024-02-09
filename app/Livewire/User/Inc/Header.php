<?php

namespace App\Livewire\User\Inc;

use Livewire\Component;

class Header extends Component
{
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
