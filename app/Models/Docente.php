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
        'horas_laborales'
    ];
    
    public function ausencia(){
        return $this->hasMany(Ausencia::class);
    }
    public function licencia(){
        return $this->hasMany(Licencia::class);
    }

    public function anexo(){
        return $this->belongsToMany(Anexo::class,'informes')
        ->withPivot('fecha','descripcion','documento_url')
        ->withTimestamps();
    }
    public function asignacion(){
        return $this->belongsToMany(Asignacione::class, 'espacios_curriculares')
        ->withPivot('nombre', 'curso', 'division','turno','horas_espacios','cupof')
        ->withTimestamps();
    }

}
