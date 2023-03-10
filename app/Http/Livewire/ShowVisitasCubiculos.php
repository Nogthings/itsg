<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Exports\CubiculosExport;
use App\Models\Cubiculo;
use Maatwebsite\Excel\Facades\Excel;

use Livewire\Component;
use Maatwebsite\Excel\Excel as ExcelExcel;

class ShowVisitasCubiculos extends Component
{
    public $cantidad = '25';
    public $fechaInicio;
    public $fechaFin;
    use WithPagination;

    public function render()
    {
        $query = Cubiculo::with('Carrera')->orderBy('created_at', 'desc');
        if($this->fechaInicio && $this->fechaFin){
            $query->whereBetween('created_at', [$this->fechaInicio . ' 00:00:00', $this->fechaFin . ' 23:59:59'])->orderBy('created_at', 'desc');
        }
        $cubiculos = $query->paginate($this->cantidad);
        return view('livewire.show-visitas-cubiculos', compact('cubiculos'));
    }

    public function export()
    {
        $fechaActual = date('d-m-Y');
        return Excel::download(new CubiculosExport($this->fechaInicio, $this->fechaFin), "Reporte de cubiculos {$fechaActual}.xlsx");
    }
}
