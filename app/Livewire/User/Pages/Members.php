<?php

namespace App\Livewire\User\Pages;

use App\Models\Members as MembersModel; // Rename the model import

use Livewire\Component;

class Members extends Component // Rename the class
{
    public $members;

    public function deleteMember($memberId): void
    {
        $member = MembersModel::find($memberId);

        if ($member) {
            $member->delete();
            $this->members = MembersModel::all();
            $this->dispatchBrowserEvent('deleted', ['message' => 'Member deleted successfully!']);
        } else {
            $this->dispatchBrowserEvent('error', ['message' => 'Member not found!']);
        }
    }

    public function render()
    {
        $this->members = MembersModel::all();

        return view('livewire.user.pages.members');
    }

    private function dispatchBrowserEvent(string $string, array $array)
    {
    }
}
