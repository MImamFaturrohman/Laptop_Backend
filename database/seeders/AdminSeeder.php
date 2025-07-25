<?php

namespace Database\Seeders; // <- tambahkan namespace ini

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), 
            'role' => 'admin',
        ]);
    }
}

?>