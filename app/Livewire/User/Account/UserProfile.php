<?php

namespace App\Livewire\User\Account;

use App\Http\Controllers\SystemController;
use App\Livewire\Forms\ProfileForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use LaravelMultipleGuards\Traits\FindGuard;
use Livewire\Component;
use Livewire\WithFileUploads;
use Note\Note;

class UserProfile extends Component
{
//    use FindGuard, LivewireAlert, WithFileUploads;

    public ProfileForm $form;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

//    protected $listeners = [
//        'confirmed',
//        'cancelled'
//    ];

//    public function mount()
//    {
//        $this->user = $this->findGuardType()->user()->load('media');
//        $this->form->name = $this->user->name;
//        $this->form->phoneNumber = $this->user->phoneNumber;
//        $this->form->email = $this->user->email;
//    }

    public function submit()
    {
        $this->form->validate();
        $this->confirm('Are you sure you want to proceed?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Yes, I am sure!',
            'cancelButtonText' => 'No, cancel it!',
            'onConfirmed' => 'confirmed',
            'onDismissed' => 'cancelled'
        ]);
    }

    public function confirmed()
    {
        $this->user->fill($this->form->validate());
        if ($this->user->isClean() && $this->form->photo === null) {
            $this->alert('warning', 'At least one value must change.');
        } else {
            // upload avatar here
            if ($this->form->photo) {
                // upload image here
                SystemController::singleMediaUploadsJob(
                    $this->user->id,
                    User::class,
                    $this->form->photo,
                    $this->user->name
                );
            }

            $this->user->save();
            Note::createSystemNotification(
                User::class,
                'Profile Update',
                'Successfully updated your profile.'
            );
            $this->dispatch('load-notification');
            $this->alert('success', 'Successfully updated your profile.');
        }
    }

    public function cancelled()
    {
        $this->alert('error', 'You have canceled.');
    }

    public function render()
    {
        return view('livewire.user.account.user-profile');
    }
}
