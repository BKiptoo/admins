<?php

namespace App\Livewire\User\Pages;

use Livewire\Component;

class Members extends Component
{
    public function render()
    {
//        // Fetch the members from the database
//        $members = Members::all();
//
//        // Pass the members data to the view
//        return view('livewire.user.pages.members', [
//            'members' => $members,
//        ]);
        // Dummy data for members
        $Members = [
            (object)['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Admin', 'created_at' => now()],
            (object)['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'User', 'created_at' => now()],
            // Add more dummy members as needed
        ];

        // Pass the dummy members data to the view
        return view('livewire.user.pages.members', [
            'members' => $Members,
        ]);
    }
}
