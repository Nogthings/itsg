<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Visita;
use Livewire\Component;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class GraficaVisitasSexo extends Component
{
    public $visitasHombres;
    public $visitasMujeres;

    public function render()
    {
        $chart_options = [
            'chart_title' => 'Visitas Totales',
            'chart_type' => 'line',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Visita',
        
            'relationship_name' => 'alumno', // represents function user() on Transaction model
            'group_by_field' => 'created_at', // users.name
            'group_by_period' => 'day',

        ];
        $chart_options2 = [
            'chart_title' => 'Visitas Masculinas',
            'chart_type' => 'line',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Visita',
        
            'relationship_name' => 'alumno_hombre', // represents function user() on Transaction model
            'group_by_field' => 'created_at', // users.name
            'group_by_period' => 'day',

        ];
        

        $chart = new LaravelChart($chart_options, $chart_options2);
        
        return view('livewire.dashboard.grafica-visitas-sexo', compact('chart') );
    }
}
