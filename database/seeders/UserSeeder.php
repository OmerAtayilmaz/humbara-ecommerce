<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    public function run(){

        User::create([
            'name' => 'Admin',
            'surname' => 'Doe',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test1234'),
        ]);

        User::create([
            'name' => 'User',
            'surname' => 'Doe',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test1234'),
        ]);

        User::create([
            'name' => 'officer',
            'surname' => 'Doe',
            'email' => 'officer@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test1234'),
        ]);
    }
}
