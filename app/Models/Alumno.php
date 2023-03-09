<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'control',
        'credencial',
        'genero',
        'carrera_id',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}