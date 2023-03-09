<?php

namespace App\Exports;

use App\Models\Visita;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class VisitasExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    public $fechaFin;
    public $fechaInicio;

    public function __construct($fechaInicio, $fechaFin)
    {
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }

    public function headings(): array
    {
        return [
            'Nombre del alumno',
            'Control',
            'Género',
            'Carrera',
            'Fecha',
        ];
    }

    public function query()
    {
        $query = Visita::join('alumnos', 'visitas.alumno_id', '=', 'alumnos.id')
        ->join('carreras', 'alumnos.carrera_id', '=', 'carreras.id')
        ->select(
            'visitas.id',
            'visitas.created_at',
            'alumnos.nombre',
            'alumnos.genero',
            'alumnos.control',
            'carreras.nombre_carrera',
        );
        if($this->fechaInicio && $this->fechaFin){
            $query->whereBetween('visitas.created_at', [$this->fechaInicio, $this->fechaFin]);
        }
        return $query->select('alumnos.nombre', 'alumnos.control', 'alumnos.genero', 'carreras.nombre_carrera', 'visitas.created_at');
    }
}

