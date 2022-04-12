<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        \App\Models\event::factory(10)->create();
        \App\Models\customer::factory(10)->create();
        \App\Models\tour_place::factory(10)->create();
    }
}
