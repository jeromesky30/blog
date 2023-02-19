<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Jerome Pingol',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'usertype' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'Juan Dela Cruz',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user@gmail.com'),
            'usertype' => 'user',
        ]);
    }
}
