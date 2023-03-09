<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;

class EditCarrera extends Component
{
    public $open = false;
    public $carrera;

    public function render()
    {
        return view('livewire.edit-carrera');
    }

    protected $rules = [
        'carrera.nombre' => 'required'
    ];

    public function mount(Carrera $carrera)
    {
        $this->carrera = $carrera;
    }

    public function update()
    {
        $this->validate();
        $this->carrera->save();
        $this->reset(['open']);
        $this->emitTo('show-carreras','render');
        $this->emit('alert', 'Se actualizaron los datos de la carrera.');
    }
}
