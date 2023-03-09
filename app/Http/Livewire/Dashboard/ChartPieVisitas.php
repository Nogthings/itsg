<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Visita;
use App\Models\Alumno;

class ChartPieVisitas extends Component
{
    protected $listeners = ['filtro'];
    public $fechaFin;
    public $fechaInicio;

    public function render()
    {
        if($this->fechaInicio && $this->fechaFin){
            $visitas_masculino = Visita::whereHas('alumno', function ($query) {
                $query->where('genero', 'Masculino')->whereBetween('visitas.created_at', [$this->fechaInicio, $this->fechaFin]);
            })->count();
    
            $visitas_femenino = Visita::whereHas('alumno', function ($query) {
                $query->where('genero', 'Femenino')->whereBetween('visitas.created_at', [$this->fechaInicio, $this->fechaFin]);
            })->count();    
        }
        else{
            $visitas_masculino = Visita::whereHas('alumno', function ($query) {
                $query->where('genero', 'Masculino');
            })->count();
    
            $visitas_femenino = Visita::whereHas('alumno', function ($query) {
                $query->where('genero', 'Femenino');
            })->count();    
        }

        // Configurar los datos del gráfico
        $data = [
            'labels' => ['Masculino', 'Femenino'],
            'datasets' => [
                [
                    'label' => 'Visitas totales',
                    'data' => [$visitas_masculino, $visitas_femenino],
                    'backgroundColor' => [
                        '#41639b',
                        '#a64d79',
                    ],
                ],
            ],
        ];

        // Configurar las opciones del gráfico
        $options = [
            'title' => [
                'display' => true,
                'text' => 'Visitas totales por género',
            ],
            'borderColor' => false,
            'responsive' => true,
            'maintainAspectRatio' => false,
            'aspectRatio' => 1.6, // Ancho:Alto = 8:5
            'height' => 600, // Altura fija de 500 píxeles
        ];

        return view('livewire.dashboard.chart-pie-visitas', compact('data', 'options'));
    }

    public function filtro($filtro)
    {
        $this->fechaInicio = $filtro[0];
        $this->fechaFin = $filtro[1];
    }
}
