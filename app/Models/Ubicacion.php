<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo_ubicacion';
    protected $fillable = [
        'codigo_ubicacion',
        'descripcion_ubicacion',
        'estado_ubicacion'
    ];
    protected $keyType = 'string';
}
