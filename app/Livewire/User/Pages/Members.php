<?php

namespace App\Livewire\User\Pages;

use App\Models\Members as MembersModel;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;
Use RealRashid\SweetAlert\Facades\Alert;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Members extends Component // Rename the class
{
    use WithPagination,WithoutUrlPagination;
    protected array $queryString = ['search'];
    protected string $paginationTheme = 'bootstrap';



    public function deleteMember($memberId): void
    {
        $member = MembersModel::query()->find($memberId);

        if ($member) {
            $member->delete();
            Alert::success('Success', 'Member deleted successfully!')->showConfirmButton('Ok', '#3085d6');
        } else {
            Alert::error('Error', 'Member not found!')->showConfirmButton('Ok', '#3085d6');
        }
    }

    public function render()
    {
        return view('livewire.user.pages.members', [
            'members' => MembersModel::query()->paginate(10)
        ]);
    }
}
