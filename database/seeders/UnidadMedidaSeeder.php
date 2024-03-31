<?php

namespace Database\Seeders;

use App\Models\UnidadMedida;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidades = [
            ['codigo' => 'UM001', 'unidad_medida' => 'Kilogramo'],
            ['codigo' => 'UM002', 'unidad_medida' => 'Litro'],
            ['codigo' => 'UM003', 'unidad_medida' => 'Metro'],
            ['codigo' => 'UM004', 'unidad_medida' => 'Pieza'],
            ['codigo' => 'UM005', 'unidad_medida' => 'Paquete'],
            ['codigo' => 'UM006', 'unidad_medida' => 'Caja'],
            ['codigo' => 'UM007', 'unidad_medida' => 'Docena'],
            ['codigo' => 'UM008', 'unidad_medida' => 'Centímetro'],
            ['codigo' => 'UM009', 'unidad_medida' => 'Mililitro'],
            ['codigo' => 'UM010', 'unidad_medida' => 'Gramo']
        ];

        foreach ($unidades as $unidad) {
            UnidadMedida::create($unidad);
        }
    }
}
