<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cubiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_alumno',
        'control_alumno',
        'cubiculo',
        'genero',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'carrera_id',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}
