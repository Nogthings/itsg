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
            'chart_title' => 'Visitas por dia',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Visita',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'filter_days' => 7,
        ];

        $chart = new LaravelChart($chart_options);
        
        return view('livewire.dashboard.grafica-visitas-sexo', compact('chart') );
    }
}
