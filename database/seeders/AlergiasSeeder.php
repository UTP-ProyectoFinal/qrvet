<?php

namespace Database\Seeders;

use App\Models\Alergias;
use App\Models\Sexo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlergiasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Alergias::create([
            'v_nombre' => 'Dermatitis Seborreica',
            'v_apuntes' => 'Aumento o disminucion de grasa en la piel de los animales	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Pioderma',
            'v_apuntes' => 'Causada por proliferacion de bacterias	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
    }
}
