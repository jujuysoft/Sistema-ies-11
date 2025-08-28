<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'direccion'
    ];
    public function docente(){
        return $this->belongsToMany(Docente::class,'informes')
        ->withPivot('fecha','descripcion','documento_url')
        ->withTimestamps();
    }
}
