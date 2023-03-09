<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;
use Livewire\WithPagination;

class ShowCarreras extends Component
{
    use WithPagination;
    public $carrera;
    public $busqueda = '';
    public $sort = 'id';
    public $direction = 'desc';
    protected $listeners = ['render', 'delete'];
    public $open_edit = false;
    public $cantidad = '10';
    public $readyToLoad = false;
    protected $queryString = [
        'cantidad' =>['except' => '10'], 
        'busqueda' =>['except' => '']
    ];

    public function render()
    {
        if($this->readyToLoad){
            $carreras = Carrera::where('nombre_carrera', 'like', '%' . $this->busqueda . '%')->orderBy($this->sort, $this->direction)->paginate($this->cantidad);
        }else{
            $carreras=[];
        }    
        return view('livewire.show-carreras', compact('carreras'));
    }

    public function loadCarreras()
    {
        $this->readyToLoad = true;
    }

    public function updatingBusqueda()
    {
        $this->resetPage();
    }

    protected $rules = [
        'carrera.nombre_carrera' => 'required'
    ];

    public function oreder($sort)
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

    public function edit(Carrera $carrera)
    {
        $this->carrera = $carrera;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->carrera->save();
        $this->reset(['open_edit']);
        $this->emitTo('show-carreras','render');
        $this->emit('alert', 'Se actualizaron los datos de la carrera.');
    }

    public function delete(Carrera $carrera)
    {
        $carrera->delete();
    }

}
