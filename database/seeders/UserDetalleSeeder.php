<?php

namespace Database\Seeders;

use App\Models\UserDetalles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserDetalleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UserDetalles::create([
            'v_telefono' => '921981000',
            'v_codcolegio' => 'M00001',
            'n_estatus' => 1,
            'n_perfil' => 1,
            'n_clinica' => 1,
            'n_user' => 1,
        ]);
        UserDetalles::create([
            'v_telefono' => '921981002',
            'v_codcolegio' => 'M00002',
            'n_estatus' => 1,
            'n_perfil' => 1,
            'n_clinica' => 1,
            'n_user' => 2,
        ]);

    }
}
