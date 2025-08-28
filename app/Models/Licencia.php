<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_docente',
        'tipo',
        'fecha_inicio',
        'fecha_fin',
        'documento_url',
        'estado',
    ];

public function docente()
{
    return $this->belongsTo(Docente::class);
}




}
