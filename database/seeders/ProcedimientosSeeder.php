<?php

namespace Database\Seeders;

use App\Models\Procedimientos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcedimientosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Procedimientos::create([
            'v_nombre' => 'Cirugía Cesarea',
            'v_apuntes' => 'Cesarea como metodo de parto',
            'n_notifica' => 40,
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Procedimientos::create([
            'v_nombre' => 'Cirugía de Fractura',
            'v_apuntes' => 'Cirugía de extremidades por fractura',
            'n_notifica' => 60,
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
    }
}
