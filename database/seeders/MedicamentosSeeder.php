<?php

namespace Database\Seeders;

use App\Models\Medicamentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicamentosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Medicamentos::create([
            'v_nombre' => 'Carbón activado',
            'v_apuntes' => 'Reductor de toxinas.',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Medicamentos::create([
            'v_nombre' => 'Aminoplex	',
            'v_apuntes' => 'Aminoácidos EV',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
    }
}
