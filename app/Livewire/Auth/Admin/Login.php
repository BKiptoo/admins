<?php

namespace App\Livewire\Auth\Admin;

use Livewire\Component;
use App\Models\Admin; // Import the Admin model

class Login extends Component
{
    public $username;
    public $password;
    public $error = false; // Add a variable to track error status


    public function login()
    {
        // Validate the input fields
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to find the admin by username
        $admin = Admin::where('username', $this->username)->first();

        // If admin found and password matches, log them in
        if ($admin && password_verify($this->password, $admin->password)) {
            //            dd('2023');
            return redirect()->route('admin-home');
        } else {
            $this->error = true;
            $this->password = '';
            session()->flash('error', 'Invalid username or password.');
        }
    }

    public function render()
    {
        return view('livewire.auth.admin.login')->layout('components.layouts.auth');
    }
}
