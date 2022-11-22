<?php

namespace Database\Seeders;

use App\Models\contratista;
use App\Models\constructora;
use App\Models\empleado;
use Illuminate\Database\Seeder;

class ConstruccionesDuarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       empleado::factory(5000)->create();
       contratista::factory(5000)->create();
       constructora::factory(5000)->create();

    }
}
