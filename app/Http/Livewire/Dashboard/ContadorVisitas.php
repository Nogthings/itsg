<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Visita;
use Livewire\Component;

class ContadorVisitas extends Component
{
    protected $listeners = ['filtro'];
    public $fechaFin;
    public $fechaInicio;
    
    
    public function render()
    {  
        if($this->fechaInicio && $this->fechaFin){
            $visitas =  Visita::whereBetween('created_at', [$this->fechaInicio, $this->fechaFin]);
        }
        else{
            $visitas = Visita::all();
        }
        return view('livewire.dashboard.contador-visitas', compact('visitas'));
    }

    public function filtro($filtro)
    {
        $this->fechaInicio = $filtro[0];
        $this->fechaFin = $filtro[1];
    }
}
