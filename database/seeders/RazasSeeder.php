<?php

namespace Database\Seeders;

use App\Models\Razas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RazasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Razas::create([
            'v_nombre' => 'Cocker Español',
            'v_apuntes' => 'Ninguno',
            'n_especie' => 1,
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Razas::create([
            'v_nombre' => 'Persa Himalayo',
            'v_apuntes' => 'Ninguno',
            'n_especie' => 2,
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
    }
}
