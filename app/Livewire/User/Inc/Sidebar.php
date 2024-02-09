<?php

namespace App\Livewire\User\Inc;
//
//use Jantinnerezo\LivewireAlert\LivewireAlert;
//use LaravelMultipleGuards\Traits\FindGuard;
use Livewire\Component;

class Sidebar extends Component
{
//    use FindGuard, LivewireAlert;

//    public function logout()
//    {
//        $this->findGuardType()->logout();
//        return redirect()->route('login');
//    }

    public function render()
    {
        return view('livewire.user.inc.sidebar');
    }
}
