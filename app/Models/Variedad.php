<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variedad extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo_variedad';
    protected $fillable = [
'codigo_variedad',
'nombre_variedad',
'descripcion_variedad',
];
protected $keyType = 'string';

}
