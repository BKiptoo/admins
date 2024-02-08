<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required|username',
        'password' => 'required',
    ];

    public function login()
    {

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Authentication successful
            return redirect()->to('/');
        }

        $this->addError('username', 'Invalid username or password.');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
