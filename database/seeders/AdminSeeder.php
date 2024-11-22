<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\User;
Use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin' . time() . "@example.com", //faking a email using timestamp
            'password' => Hash::make('password'), //password is hashed for encrypted user password storage
            'role' => 'admin',
        ]);
    }
}
