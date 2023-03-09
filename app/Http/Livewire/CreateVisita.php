<?php

namespace App\Http\Livewire;

use App\Models\Alumno;
use App\Models\Visita;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CreateVisita extends Component
{
    public $alumno_id;
    public $busqueda;
    protected $listeners = ['render'];

    public function render()
    {
        $alumnos = Alumno::all();
        return view('livewire.create-visita', compact('alumnos'));
    }

    protected $rules = [
        'alumno_id' => 'required | numeric',
    ];

    public function updated($field)
    {
        $this->resetErrorBag();
    }

    public function save()
    {
        $validateData = $this->validate([
            'busqueda' => 'required|numeric'
        ]);
        
        // $alumno = Alumno::find($this->alumno_id);
        $alumno = Alumno::where('control', $this->busqueda)
            ->orWhere('credencial', $this->busqueda)->first();
        if(!$alumno){
            $this->emit('waring', 'No se encontraron los datos del alumno');
            $this->reset(['busqueda']);
        }
        else{
            Visita::create([
                'alumno_id' => $alumno->id
            ]);
            // $this->emitTo('create-visita','render');
            // $this->emit('show-visitas-biblioteca', 'render');
            $this->reset(['busqueda']);
            $this->emit('alert', 'Gracias por su visita');
            $this->emit('registroGuardado');
        }

        // $this->validate([
        //     'alumno_id' => ['required', function($attribute, $value){
        //         if(!Alumno::find($value)){
        //             $this->addError($attribute, 'No existe');
        //         }
        //     }],
        //     'alumno_id' => 'required | numeric '
        // ]);
        // Visita::create([
        //     'alumno_id' => $this->alumno_id,
        // ]);
        // $this->emitTo(['create-visita', 'dashboard.contador-visitas'],'render');
        // $this->reset(['alumno_id']);
        // $this->emit('alert', 'Gracias por su visita');
        // $this->emit('registroGuardado');
    }
}
