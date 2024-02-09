<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $username;
    public $phoneNumber; // Add the phoneNumber property
    public $password;
    public $terms;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'phoneNumber' => 'required', // Include the phoneNumber rule
        'password' => 'required|min:6',
        'terms' => 'required|accepted',
    ];

    public function register()
    {
        $this->validate();
//        dd('2023');

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'phoneNumber' => $this->phoneNumber,
            'password' => bcrypt($this->password)
        ]);

        // Optionally, you might want to redirect the user after registration
        return redirect()->to('user.home'); // Redirect to the homepage
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.auth');
    }
}
