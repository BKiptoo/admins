<?php

namespace App\Livewire\Auth\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogin extends Component
{
    public $username;
    public $password;
    public $remember = false;

    // Method to handle form submission and login
    public function login()
    {
        // Validate form fields
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $this->username)->first();
        if ($admin && password_verify($this->password, $admin->password)) {
//            dd(2023);
            // Authentication passed, log in the admin
//            Auth::login($admin, $this->remember);
            // Redirect to admin home route
            return redirect()->route('admin.home');
        } else {
            // Authentication failed, show error message
            session()->flash('error', 'Incorrect username or password.');
        }
    }

    // Method to render the login form
    public function render()
    {
        return view('livewire.auth.admin.login')->layout('components.layouts.auth');
    }
}
