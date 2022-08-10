<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create admin user
        $admin = \App\Models\Auth\User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone' => '0774567890',
            'address' => 'Colombo',
            'nic' => '200423500116',
            'city' => 'Borella',
            'state' => 'Wetstern',
            'zip' => '10200',
            'country' => 'LK',
            'settings' => '[]',
            'role' => 'admin',
        ]);

        //create user
        $admin = \App\Models\Auth\User::create([
            'name' => 'Site User',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone' => '0774567890',
            'address' => 'Colombo',
            'nic' => '200423500116',
            'city' => 'Borella',
            'state' => 'Wetstern',
            'zip' => '10200',
            'country' => 'LK',
            'settings' => '[]',
            'role' => 'user',
        ]);

        \App\Models\Auth\User::factory(10)->create();

        $this -> call([CategorySeeder::class,]);
    }
}
