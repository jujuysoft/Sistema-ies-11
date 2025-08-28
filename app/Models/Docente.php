<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'dni',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'email',
        'fecha_ingreso',
        'fecha_egreso',
        'estado',
        'horas_laborales',
    ];
    //Relacion con Informe_Docente, un docente tiene uno o mas informes por el HasMany
    public function informes__docentes(){
        return $this->hasMany(Informes_Docente::class);

    }


}
