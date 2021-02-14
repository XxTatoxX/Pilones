<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoclase extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo_clase';
    protected $fillable = [
        'codigo_clase',
        'nombre_clase',
        'descripcion_clase',
    ];
    protected $keyType = 'string';
}
