<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use Livewire\Component;

class CreateCarrera extends Component
{
    public $open = false;
    public $nombre_carrera;

    protected $rules = [
        'nombre_carrera' => 'required|max:50'
    ];

    public function render()
    {
        
        return view('livewire.create-carrera');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        Carrera::create([
            'nombre_carrera' => $this->nombre_carrera,
            'status' => 1,
        ]);
        $this->emitTo('show-carreras','render');
        $this->reset(['nombre_carrera', 'open']);
        $this->emit('alert', 'Se registro la carrera.');
    }
}
