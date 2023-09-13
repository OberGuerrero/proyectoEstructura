<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $userId = User::pluck('id')->toArray();
        $faker = \Faker\Factory::create();

        \App\Models\Client::factory()->create();
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@hotmail.com',
            'password' => Hash::make('admin123*'),
        ]);
    }
}
