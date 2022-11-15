<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SexoSeeder::class,
            PerfilesSeeder::class,
            EspeciesSeeder::class,
            TipoDocSeeder::class,
            AlergiasSeeder::class,
            MedicamentosSeeder::class,
            VacunasSeeder::class,
            DiagnosticosSeeder::class,
            ProcedimientosSeeder::class,
            RazasSeeder::class,
        ]);
    }
}
