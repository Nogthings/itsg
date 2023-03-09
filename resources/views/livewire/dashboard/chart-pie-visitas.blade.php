<div>
    {{-- The whole world belongs to you. --}}
    <canvas id="chart"></canvas>
    @push('js')
    <script>
        // Obtener los datos del componente Livewire
        var data = {!! json_encode($data) !!};
        var options = {!! json_encode($options) !!};
    
        // Crear el gráfico utilizando Chart.js
        var chart = new Chart(document.getElementById('chart'), {
            type: 'doughnut',
            data: data,
            options: options,
        });
    </script>
    @endpush
</div>
