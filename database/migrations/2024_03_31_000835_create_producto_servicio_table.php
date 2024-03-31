<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_servicio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rubro')->constrained('rubro');
            $table->foreignId('id_unidad_medida')->constrained('unidad_medida');
            $table->string('codigo', 20);
            $table->char('tipo', 1);
            $table->string('producto_servicio', 25);
            $table->foreignId('id_condicion_iva')->constrained('condicion_iva');
            $table->decimal('precio_bruto_unitario', 30, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_servicio');
    }
}
