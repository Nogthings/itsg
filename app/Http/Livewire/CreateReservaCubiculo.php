<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;
use App\Models\Cubiculo;

class CreateReservaCubiculo extends Component
{
    public $open = false;
    public $nombre_alumno;
    public $control_alumno;
    public $carrera_id;
    public $cubiculo;
    public $genero;
    public $fecha;
    public $hora_inicio;
    public $hora_fin;

    public function render()
    {
        $carreras = Carrera::all();
        return view('livewire.create-reserva-cubiculo', compact('carreras'));
    }

    public function mount()
    {
        $this->fecha = date('Y-m-d');
    }

    protected $rules = [
        'nombre_alumno' => 'required',
        'control_alumno' => 'required',
        'cubiculo' => 'required',
        'carrera_id' => 'required',
        'genero' => 'required',
        'fecha' => 'required',
        'hora_inicio' => 'required',
        'hora_fin' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        Cubiculo::create([
            'nombre_alumno' => $this->nombre_alumno,
            'control_alumno' => $this->control_alumno,
            'carrera_id' => $this->carrera_id,
            'cubiculo' => $this->cubiculo,
            'genero' => $this->genero,
            'fecha' => $this->fecha,
            'hora_inicio' => $this->hora_inicio,
            'hora_fin' => $this->hora_fin,
        ]);
        $this->emitTo('show-cubiculos','render');
        $this->reset(['nombre_alumno','control_alumno','cubiculo', 'genero', 'fecha', 'hora_inicio', 'hora_fin', 'open']);
        $this->emit('alert', 'Se reservo el cubiculo');
    }
    public function cancel()
    {
        $this->reset(['nombre_alumno','control_alumno', 'carrera_id','cubiculo', 'genero', 'fecha', 'hora_inicio', 'hora_fin', 'open']);
    }
}
