<div>
    {!! $chart->renderHtml() !!}

    @push('js')
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderJs() !!}
    @endpush
</div>