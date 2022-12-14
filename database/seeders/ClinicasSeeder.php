<?php

namespace Database\Seeders;

use App\Models\Clinicas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clinicas::create([
            'v_nomclin' => 'Club Pet',
            'v_pais' => 'Perú',
            'v_ciuomun' => 'Cercado de Lima',
        ]);
    }
}
