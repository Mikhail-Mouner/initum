<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        for ($i=0;$i<15;$i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email(),
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
            ]);
        }

    }
}
