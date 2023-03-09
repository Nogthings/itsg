<?php

namespace App\Http\Livewire;

use App\Models\Cubiculo;
use Livewire\Component;

class ShowCubiculos extends Component
{
    public $readyToLoad = false;

    protected $listeners = ['render'];
    public function render()
    {
        if($this->readyToLoad){
            $fechaActual = date('Y-m-d');
            $cubiculos = Cubiculo::with('Carrera')->where('fecha', 'like', $fechaActual)->get();
        }
        else{
            $cubiculos=[];
        }
        return view('livewire.show-cubiculos', compact(['cubiculos']));
    }

    public function loadCubiculos()
    {
        $this->readyToLoad = true;
    }
}
