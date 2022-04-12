<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Admin::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Admin::create([
                'username_admin' => $faker->sentence,
                'password_admin' => $faker->sentence,
                'nama_admin' => $faker->sentence,
                'noHP_admin' => $faker->sentence,
                'role_id' => $faker->sentence,
            ]);
        }
    }
}
