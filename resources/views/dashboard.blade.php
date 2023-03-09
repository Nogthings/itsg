<x-app-layout class=" rounded">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-white">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-2">
                <div class="flex items-center justify-center h-28 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                    @livewire('dashboard.filtrar-visitas')
                </div>
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <div class="flex flex-col items-center justify-center space-y-4">
                                <div class="flex items-center text-gray-800 dark:text-gray-50 space-x-1 text-lg uppercase">
                                    <svg viewBox="-1.5 0 15 15" class="flex-shrink-0 w-6 h-6 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M574,120 C575.324428,120 580,114.054994 580,110.833333 C580,107.611672 577.313708,105 574,105 C570.686292,105 568,107.611672 568,110.833333 C568,114.054994 572.675572,120 574,120 Z M574,113.333333 C575.420161,113.333333 576.571429,112.214045 576.571429,110.833333 C576.571429,109.452621 575.420161,108.333333 574,108.333333 C572.579839,108.333333 571.428571,109.452621 571.428571,110.833333 C571.428571,112.214045 572.579839,113.333333 574,113.333333 Z" transform="translate(-568 -105)"/>
                                    </svg>
                                    <p>Visitas Totales:</p>
                                </div>
                                <div class="text-gray-800 dark:text-gray-50">
                                    @livewire('dashboard.contador-visitas')
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <div class="flex flex-col items-center justify-center space-y-4">
                                <div class="flex items-center text-gray-800 dark:text-gray-50 space-x-1 text-lg uppercase">
                                    <svg class="flex-shrink-0 w-8 h-8 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 11C9.23858 11 7 13.2386 7 16C7 18.7614 9.23858 21 12 21C14.7614 21 17 18.7614 17 16C17 13.2386 14.7614 11 12 11ZM12 11V3M12 3L16 7M12 3L8 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>Visitas Masculinas:</p>
                                </div>
                                <div class="text-gray-800 dark:text-gray-50">
                                    @livewire('dashboard.contador-visitas-masculino')
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <div class="flex flex-col items-center justify-center space-y-4">
                                <div class="flex items-center text-gray-800 dark:text-gray-50 space-x-1 text-lg uppercase">
                                    <svg class="flex-shrink-0 w-8 h-8 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 18H15M12 13V21M12 13C14.7614 13 17 10.7614 17 8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8C7 10.7614 9.23858 13 12 13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <p>Visitas Femeninas:</p>
                                </div>
                                <div class="text-gray-800 dark:text-gray-50">
                                    @livewire('dashboard.contador-visitas-femenino')
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center p-6 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                    @livewire('dashboard.chart-pie-visitas')
                    @livewire('dashboard.grafica-visitas-sexo')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
