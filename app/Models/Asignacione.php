<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacione extends Model
{
    //
    protected $fillable= [
        'id_Icl',
        'dia_semana',
        'hora_inicio',
        'hora_fin',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'motivo',
        'caracter',
    ];
    public function icl(){
        return $this->belongsTo(Icl::class);
    }
    public function docente(){
        return $this->belongsToMany(Docente::class,'espacios_curriculares')
        ->withPivot('nombre','curso','division','turno','horas_espacios','cupof')
        ->withTimestamps();
    }
}
