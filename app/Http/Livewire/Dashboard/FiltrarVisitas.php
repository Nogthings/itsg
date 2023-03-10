<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class FiltrarVisitas extends Component
{
    public $fechaInicio;
    public $fechaFin;

    public function render()
    {
        return view('livewire.dashboard.filtrar-visitas');
    }

    public function filtrar()
    {
        $this->emit('filtro', [$this->fechaInicio . ' 00:00:00', $this->fechaFin . ' 23:59:59']);
    }

    public function mount()
    {
        $this->fechaInicio = date('Y-m-d');
        $this->fechaFin = date('Y-m-d');
    }

    public function eliminarFiltro()
    {
        $this->reset(['fechaInicio', 'fechaFin']);
        $this->emit('filtro', [$this->fechaInicio, $this->fechaFin]);
    }
}
