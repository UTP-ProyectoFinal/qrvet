<?php

namespace Database\Seeders;

use App\Models\Especies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspeciesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Especies::create([
            'v_decripc' => 'Perro',
        ]);
        Especies::create([
            'v_decripc' => 'Gato',
        ]);
        Especies::create([
            'v_decripc' => 'Conejo',
        ]);
        Especies::create([
            'v_decripc' => 'Ave',
        ]);
        Especies::create([
            'v_decripc' => 'Pez',
        ]);
    }
}
