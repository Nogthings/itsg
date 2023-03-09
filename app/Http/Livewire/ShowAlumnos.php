<?php

namespace App\Http\Livewire;

use App\Models\Alumno;
use App\Models\Carrera;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAlumnos extends Component
{
    use WithPagination;

    public $alumno;
    public $busqueda = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $open_edit = false;
    public $readyToLoad = false;
    public $cantidad = '10';
    protected $listeners = ['render', 'delete'];
    protected $queryString = [
        'cantidad' => ['except' => '10'],
        'busqueda' => ['except' => '']
    ];

    public function render()
    {
        if($this->readyToLoad){
            $alumnos = Alumno::with('Carrera')->where('nombre', 'like', '%' . $this->busqueda . '%')
                                    ->orWhere('control', 'like', '%' . $this->busqueda . '%')
                                    ->orderBy($this->sort, $this->direction)->paginate($this->cantidad);
                                    $carreras = Carrera::all();
        }else{
            $alumnos=[];
            $carreras=[];
        }
        return view('livewire.show-alumnos', compact(['alumnos', 'carreras']));
    }

    public function loadAlumnos()
    {
        $this->readyToLoad = true;
    }

    protected $rules = [
        'alumno.nombre' => 'required',
        'alumno.control' => 'required',
        'alumno.genero' => 'required',
        'alumno.credencial' => 'required',
        'alumno.carrera_id' => 'required'
    ];

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = "asc";
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
        }
    }

    public function edit(Alumno $alumno)
    {
        $this->alumno = $alumno;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->alumno->save();
        $this->reset(['open_edit']);
        $this->emitTo('show-alumnos', 'render');
        $this->emit('alert', 'Se actualizaron los datos del alumno');
    }

    public function delete(Alumno $alumno)
    {
        $alumno->delete();
    }
}
