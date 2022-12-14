<?php

namespace Database\Seeders;

use App\Models\TipoDoc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TipoDoc::create([
            'v_decripc' => 'DNI',
        ]);
        TipoDoc::create([
            'v_decripc' => 'CE',
        ]);
        TipoDoc::create([
            'v_decripc' => 'Otros',
        ]);
    }
}
