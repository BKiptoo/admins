<?php

namespace App\Livewire\Auth\Admin;

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
        // If the user is already authenticated, redirect them to the appropriate home page
        if (Auth::check()) {
            if (Auth::admin()->isAdmin()) {
                return redirect()->to('admin.home');
            } else {
                return redirect()->to('home');
            }
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Check if the authenticated user is an admin
            if (Auth::user()->isAdmin()) {
                // Authentication successful for admin user
                return redirect()->to('admin.home');
            } else {
                // Authentication successful for regular user
                return redirect()->to('home');
            }
        }

        $this->addError('username', 'Invalid username or password.');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
