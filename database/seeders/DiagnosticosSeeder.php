<?php

namespace Database\Seeders;

use App\Models\Diagnosticos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosticosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Diagnosticos::create([
            'v_nombre' => 'Artrosis codo derecho',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Demodicosis',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Alergia ',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Cistitis por E. coli	',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Ehrlichia',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Otitis 	',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Excema Humedo	',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Giardia',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Diagnosticos::create([
            'v_nombre' => 'Infeccion Urinaria ',
            'v_apuntes' => 'Ninguno',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
    }
}
