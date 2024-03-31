<?php

namespace Database\Seeders;

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
        $this->call(RubroSeeder::class);
        $this->call(UnidadMedidaSeeder::class);
        $this->call(CondicionIvaSeeder::class);
    }
}
