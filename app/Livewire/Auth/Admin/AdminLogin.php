<?php

namespace App\Livewire\Auth\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogin extends Component
{
    public $username;
    public $password;


    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.auth.admin.login')->layout('components.layouts.auth');
    }

    public function login()
    {
//       dd(200);
        $this->validate();

        // Fetch admin user by username
        $admin = Admin::where('username', $this->username)->first();

        if (!$admin || !$admin->checkPassword($this->password)) {
            // Authentication failed

            $this->addError('username', 'Invalid username or password.');
            return view('admin.home');
        }

        // Authenticate admin user
        Auth::login($admin);

        // Authentication successful
        return redirect()->route('admin.home');
    }
}
