<?php

namespace Database\Seeders;

use App\Models\Perfiles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Perfiles::create([
            'v_decripc' => 'Administrador',
        ]);
        Perfiles::create([
            'v_decripc' => 'Medico',
        ]);
    }
}
