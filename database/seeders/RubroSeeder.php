<?php

namespace Database\Seeders;

use App\Models\Rubro;
use Illuminate\Database\Seeder;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rubros = [
            ['rubro' => 'Tecnología'],
            ['rubro' => 'Electrodomésticos'],
            ['rubro' => 'Ropa'],
            ['rubro' => 'Alimentación'],
            ['rubro' => 'Deportes'],
            ['rubro' => 'Jardinería'],
            ['rubro' => 'Librería'],
            ['rubro' => 'Juguetes'],
            ['rubro' => 'Música'],
            ['rubro' => 'Bricolaje']
        ];

        foreach ($rubros as $rubro) {
            Rubro::create($rubro);
        }
    }
}
