<?php

namespace Database\Seeders;

use App\Models\Sexo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Sexo::create([
            'v_decripc' => 'Femenino',
        ]);
        Sexo::create([
            'v_decripc' => 'Masculino',
        ]);
    }
}
