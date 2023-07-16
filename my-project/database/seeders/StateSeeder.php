<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\State::factory()->create([
             'state_name' => 'Accepted',
         ]);

        \App\Models\State::factory()->create([
            'state_name' => 'Rejected',
        ]);
    }
}
