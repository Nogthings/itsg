<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Visita;
use Livewire\Component;

class ContadorVisitasMasculino extends Component
{
    protected $listeners = ['filtro'];
    public $fechaFin;
    public $fechaInicio;

    public function render()
    {
        if ($this->fechaInicio && $this->fechaFin) {
            $visitas = Visita::join('alumnos', 'alumnos.id', '=', 'visitas.alumno_id')
            ->where('alumnos.genero', 'like', 'Masculino')->whereBetween('visitas.created_at', [$this->fechaInicio, $this->fechaFin])
            ->get();
        }
        else{
            $visitas = Visita::join('alumnos', 'alumnos.id', '=', 'visitas.alumno_id')
            ->where('alumnos.genero', 'like', 'Masculino')
            ->get();
        }
        return view('livewire.dashboard.contador-visitas-masculino', compact('visitas'));
    }

    public function filtro($filtro)
    {
        $this->fechaInicio = $filtro[0];
        $this->fechaFin = $filtro[1];
    }
}
