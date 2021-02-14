<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo_finca';
    protected $fillable = [
        'codigo_finca',
        'nombre_finca',
        'descripcion_finca',
    ];
    protected $keyType = 'string';
}
