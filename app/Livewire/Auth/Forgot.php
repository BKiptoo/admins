<?php

namespace App\Livewire\Auth;

//use App\Jobs\MailJob;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Forgot extends Component
{

    public function render()
    {
        return view('livewire.auth.forgot')->layout('components.layouts.auth');
    }
}
