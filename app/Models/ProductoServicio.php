<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductoServicio extends Model
{
    use HasFactory;

    protected $table = 'producto_servicio';
    protected $fillable = [
        'id_rubro',
        'id_unidad_medida',
        'codigo',
        'tipo',
        'producto_servicio',
        'id_condicion_iva',
        'precio_bruto_unitario'
    ];

    protected $primaryKey = 'id';

    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'id_rubro');
    }

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class, 'id_unidad_medida');
    }

    public function condicionIva()
    {
        return $this->belongsTo(CondicionalIva::class, 'id_condicion_iva');
    }

}
