<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icl extends Model
{
    use HasFactory;
    protected $fillable = [
        'anio',
        'fecha_inicio',
        'fecha_fin',
        'observaciones',
    ];
    public function asignacion(){
        return $this->hasMany(Asignacione::class);  
    }
}
