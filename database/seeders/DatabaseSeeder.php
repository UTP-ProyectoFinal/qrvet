<?php

namespace Database\Seeders;

use App\Models\UserDetalles;
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
            ClinicasSeeder::class,
            PerfilesSeeder::class,
            UserSeeder::class,
            UserDetalleSeeder::class,
            SexoSeeder::class,
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
