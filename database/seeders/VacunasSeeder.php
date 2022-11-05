<?php

namespace Database\Seeders;

use App\Models\Vacunas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacunasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Vacunas::create([
            'v_nombre' => 'Antirrabica Canina',
            'v_apuntes' => 'Rabia',
            'n_expira' => '360',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Vacunas::create([
            'v_nombre' => 'Triple Felina',
            'v_apuntes' => 'Calicivirus / Rinotraqueitis / Panleucopenia',
            'n_expira' => '360',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
    }
}
