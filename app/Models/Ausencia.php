<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ausencia extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_docente',
        'fecha',
        'motivo',
        'justificada',
        'fecha_justififacion',
        'documento_url',
    ];
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
}
