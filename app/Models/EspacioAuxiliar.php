<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspacioAuxiliar extends Model
{
    //
    use HasFactory;
    protected $fillable=[
        'nombre',
        'curso',
        'division',
        'turno',
        'horas_espacios',
        'cupof'
    ];
}
