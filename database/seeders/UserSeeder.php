<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yaquelin Jimenez',
            'email' => 'gemmay26@gmail.com',
            'password' => Hash::make('1qazxsw2'),
        ]);
        User::create([
            'name' => 'Christian Vilcapoma',
            'email' => 'cavp1998@gmail.com',
            'password' => Hash::make('Hola12345'),
        ]);

    }
}
