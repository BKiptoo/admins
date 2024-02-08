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
//    public $email;
//
//    protected $rules = [
//        'email' => 'required|email|exists:users,email',
//    ];
//
//    public function resetPassword()
//    {
//        $validatedData = $this->validate();
//
//        try {
//            $user = User::where('email', $validatedData['email'])->firstOrFail();
//
//            // Send email with reset link
//            dispatch(new MailJob(
//                $user->name,
//                $user->email,
//                'Account Password Reset',
//                'You are receiving this email because we received a password reset request for your account. This password reset link will expire in 60 minutes. If you did not request a password reset, no further action is required.',
//                true,
//                URL::temporarySignedRoute('reset', now()->addMinutes(60), ['token' => encrypt($user->email)]),
//                '<<< RESET PASSWORD >>>'
//            ))->onQueue('emails')->delay(now()->addSeconds(30));
//
//            $this->reset(['email']);
//            session()->flash('success', 'A new password reset link has been sent to your email address. Kindly check and use it to update your password.');
//
//        } catch (\Exception $exception) {
//            session()->flash('error', 'An error occurred. Try again later');
//        }
//    }

    public function render()
    {
        return view('livewire.auth.forgot')->layout('components.layouts.auth');
    }
}
