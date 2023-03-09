<div>
    <h1 class="text-slate-800 dark:text-white text-center mb-2">Visitas por Sexo</h1>
    {!! $chart->renderHtml() !!}

    @push('js')
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderJs() !!}
    @endpush
</div>