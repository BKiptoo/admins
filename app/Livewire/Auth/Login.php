<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string',
    ];

    public function login()
    {
        // If the user is already authenticated, redirect them to the home page
        if (Auth::check()) {
            return redirect()->to('user.home');
        }

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Authentication successful
            return redirect()->to('user.home');
        }

        $this->addError('username', 'Invalid username or password.');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
