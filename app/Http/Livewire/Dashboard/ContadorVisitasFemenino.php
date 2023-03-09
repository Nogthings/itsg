<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Visita;
use Livewire\Component;

class ContadorVisitasFemenino extends Component
{
    protected $listeners = ['filtro'];
    public $fechaFin;
    public $fechaInicio;

    public function render()
    {
        if ($this->fechaInicio && $this->fechaFin) {
            $visitas = Visita::join('alumnos', 'alumnos.id', '=', 'visitas.alumno_id')
            ->where('alumnos.genero', 'like', 'Femenino')->whereBetween('visitas.created_at', [$this->fechaInicio, $this->fechaFin])
            ->get();
        }
        else{
            $visitas = Visita::join('alumnos', 'alumnos.id', '=', 'visitas.alumno_id')
            ->where('alumnos.genero', 'like', 'Femenino')
            ->get();
        }
        return view('livewire.dashboard.contador-visitas-femenino', compact('visitas'));
    }

    public function filtro($filtro)
    {
        $this->fechaInicio = $filtro[0];
        $this->fechaFin = $filtro[1];
    }
}
