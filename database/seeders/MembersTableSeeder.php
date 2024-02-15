<?php

namespace Database\Seeders;

use App\Models\Members;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 dummy members using the MembersFactory
        Members::factory()->count(100)->create();
    }
}
