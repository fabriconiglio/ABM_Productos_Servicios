<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionalIva extends Model
{
    use HasFactory;

    protected $table = 'condicion_iva';
    protected $fillable = ['codigo', 'condicional_iva', 'alicuota'];
}
