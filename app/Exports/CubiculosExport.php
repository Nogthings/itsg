<?php

namespace App\Exports;

use App\Models\Cubiculo;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class CubiculosExport implements FromQuery, WithHeadings, ShouldAutoSize
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
            'ID',
            'Nombre del alumno',
            'Carrera',
            'Género',
            'Cubículo',
            'Hora de inicio',
            'Hora de fin',
            'Fecha'
        ];
    }

    public function query()
    {
        $query = Cubiculo::join('carreras', 'cubiculos.carrera_id', '=', 'carreras.id')
        ->select(
            'cubiculos.id', 
            'cubiculos.nombre_alumno',
            'carreras.nombre_carrera',
            'cubiculos.genero',
            'cubiculos.cubiculo',
            'cubiculos.hora_inicio',
            'cubiculos.hora_fin',
            'cubiculos.fecha'
        );
        if($this->fechaInicio && $this->fechaFin){
            $query->whereBetween('visitas.created_at', [$this->fechaInicio, $this->fechaFin]);
        }
        return $query->select('cubiculos.id', 'cubiculos.nombre_alumno', 'carreras.nombre_carrera', 'cubiculos.genero', 'cubiculos.cubiculo', 'cubiculos.hora_inicio', 'cubiculos.hora_fin', 'cubiculos.fecha');
    }
}

