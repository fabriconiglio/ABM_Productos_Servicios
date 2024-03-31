<?php

namespace Database\Seeders;

use App\Models\CondicionalIva;
use Illuminate\Database\Seeder;

class CondicionIvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condicionesIva = [
            ['codigo' => 'IVA21', 'condicional_iva' => 'Responsable Inscripto', 'alicuota' => 21.000],
            ['codigo' => 'IVA105', 'condicional_iva' => 'Responsable Monotributo', 'alicuota' => 10.500],
            ['codigo' => 'IVA27', 'condicional_iva' => 'Responsable no Inscripto', 'alicuota' => 27.000],
            ['codigo' => 'IVA0', 'condicional_iva' => 'Exento', 'alicuota' => 0.000],
            ['codigo' => 'IVANR', 'condicional_iva' => 'No Responsable', 'alicuota' => 0.000]
        ];

        foreach ($condicionesIva as $condicionIva) {
            CondicionalIva::create($condicionIva);
        }
    }
}
