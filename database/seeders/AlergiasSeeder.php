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
            'v_apuntes' => 'Aumento o disminucion de grasa en la piel de los animales',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Pioderma',
            'v_apuntes' => 'Causada por proliferacion de bacterias',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Atopía',
            'v_apuntes' => 'Alergia al ambiente, polen, moho, etc.',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Dermatitis alimentaria',
            'v_apuntes' => 'Dermatitis a causa de un componente de los alimentos',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);

        Alergias::create([
            'v_nombre' => 'Dermatitis atópica	',
            'v_apuntes' => 'Dermatitis causada por algún elemento que no se puede identificar y que se encuentra dentro del ambiente',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Dermatitis autoinmunes',
            'v_apuntes' => 'Eritremas',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Dermatitis demodecica	',
            'v_apuntes' => 'Causada por proliferacion demodex canis	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Dermatitis endocrinas	',
            'v_apuntes' => 'Falta o exceso de diferente tipo de hormonas	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Dermatitis micoticas	',
            'v_apuntes' => 'Causada por diferente tipo de hongos	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Dermatitis por Cushing	',
            'v_apuntes' => 'Causada como efecto secundario a Cushing	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Dermatitis por malazessia	',
            'v_apuntes' => 'Causada por proliferacion de malazessia	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
        Alergias::create([
            'v_nombre' => 'Pulga',
            'v_apuntes' => 'Alergia a la saliba de la pulga	',
            'a_n_iduser' => 1,
            'n_estado' => 1,
        ]);
    }
}
