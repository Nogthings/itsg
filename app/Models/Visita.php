<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;
    protected $fillable = [
        'alumno_id',
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);    
    }

    public function alumno_hombre()
    {
        // return $this->belongsTo(Alumno::class)->where('alumnos.genero', 'like', 'Masculino');
        return $this->belongsTo(Alumno::class)->where('alumnos.genero', 'Masculino');
    }

    public function alumno_mujer()
    {
        return $this->belongsTo(Alumno::class)->where('genero', 'Femenino');
    }
}

