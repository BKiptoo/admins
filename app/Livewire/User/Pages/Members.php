<?php

namespace App\Livewire\User\Pages;

use App\Models\Members as MembersModel;
use Livewire\Component;
use Livewire\WithPagination;
Use RealRashid\SweetAlert\Facades\Alert;


class Members extends Component // Rename the class
{
    use WithPagination;



    public function deleteMember($memberId): void
    {
        $member = MembersModel::query()->findOrFail($memberId);

        if ($member) {
            $member->delete();
            Alert::success('Success', 'Member deleted successfully!');
        } else {
            Alert::error('Error', 'Member not found!');
        }
    }

    public function render()
    {
        return view('livewire.user.pages.members', [
            'members' => MembersModel::query()->paginate(10)
        ]);
    }

    private function dispatchBrowserEvent(string $string, array $array)
    {
    }
}
