<?php

namespace App\Http\Livewire;

use App\Models\Visita;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\VisitasExport;
use Maatwebsite\Excel\Facades\Excel;


class ShowVisitasBiblioteca extends Component
{
    public $cantidad = '25';
    public $fechaInicio;
    public $fechaFin;
    use WithPagination;

    public function render()
    {
        $query = Visita::with('Alumno.Carrera')->orderBy('created_at', 'desc');
        if($this->fechaInicio && $this->fechaFin){
            $query->whereBetween('created_at', [$this->fechaInicio . ' 00:00:00', $this->fechaFin . ' 23:59:59'])->orderBy('created_at', 'desc');
        }
        $visitas = $query->paginate($this->cantidad);
        return view('livewire.show-visitas-biblioteca', compact('visitas'));
    }

    public function mount()
    {
        // $this->fechaInicio = ('Y-m-d');
        // $this->fechaFin = ('Y-m-d H:i:s');
    }

    public function export()
    {
        $fechaActual = date('d-m-Y');
        return Excel::download(new VisitasExport($this->fechaInicio, $this->fechaFin), "Reporte-Visitas-Biblioteca-{$fechaActual}.xlsx");
    }

}


        // $query = Visita::with('Alumno.Carrera');
        // if($this->fechaInicio && $this->fechaFin){
        //     $query->whereBetween('created_at', [$this->fechaInicio, $this->fechaFin]);
        // }
        // $visitas = $query->paginate($this->cantidad);

        // Excel::create('visitas', function($excel) use ($visitas){
        //     $excel->sheet('Exportar', function($sheet) use ($visitas){
        //         $sheet->fromArray($visitas);
        //     });
        // })->export('xls');