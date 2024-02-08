<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\UserResetPasswordForm;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Reset extends Component
{
    use LivewireAlert;

    public UserResetPasswordForm $form;

    public function mount(string $token)
    {
        if (!request()->hasValidSignature()) {
            session()->flash('error', 'Kindly generate a new password reset link.');
            return redirect()->route('forgot');
        }

        $this->form->email = decrypt($token);
    }

    public function resetPassword()
    {
        $this->form->validate();

        try {
            $user = User::query()->firstWhere('email', $this->form->email);

            // Do hash validation
            if (Hash::check($this->form->password, $user->password)) {
                $this->alert('warning', 'New password cannot be the same as your current password.');
                return redirect()->back();
            }

            $user->update([
                'password' => bcrypt($this->form->password)
            ]);

            auth()->loginUsingId($user->id);
            $this->alert('success', 'Account password has been updated.');
            return redirect()->route('user.home');

        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            $this->alert(
                'error',
                'An error occurred. Try again later'
            );

            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.auth.reset')->layout('components.layouts.auth');
    }
}
