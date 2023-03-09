<?php

namespace App\Http\Livewire;

use App\Models\Alumno;
use App\Models\Carrera;
use Livewire\Component;

class CreateAlumno extends Component
{
    public $open = false;
    public $nombre;
    public $control;
    public $credencial;
    public $carrera_id;
    public $genero;
    public $selectedOption;

    public function render()
    {
        $carreras = Carrera::all();
        return view('livewire.create-alumno', compact('carreras'));
    }

    protected $rules = [
        'nombre' => 'required',
        'control' => 'required',
        'credencial' => 'required',
        'genero' => 'required',
        'carrera_id' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // public function mount()
    // {
    //     $this->selectedOption = '';
    // }

    // public function updatedOption($selectedOption)
    // {
    //     $this->selectedOption = $selectedOption;
    // }


    public function save()
    {
        $this->validate();
        Alumno::create([
            'nombre' => $this->nombre,
            'control' => $this->control,
            'credencial' => $this->credencial,
            'genero' => $this->genero,
            'carrera_id' => $this->carrera_id,
        ]);
        $this->emitTo('show-alumnos','render');
        $this->reset(['nombre','control','credencial','carrera_id', 'open', 'genero']);
        $this->emit('alert', 'Se registro el alumno.');
    }

    public function cancel()
    {
        $this->reset(['nombre','control','credencial','carrera_id', 'open']);
    }
}
