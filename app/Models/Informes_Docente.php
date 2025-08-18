<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informes_Docente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_docente',
        'fecha',
        'descripcion',
        'documento_url'
    ];
    //Relacion entre Informe_Docente con Docente ya que, muchos Informes perteneces a un docente
    //Por eso el belongsTo
    public function docentes(){
        return $this->belongsTo(Docente::class);
    }
}
