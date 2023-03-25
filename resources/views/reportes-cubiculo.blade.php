<x-app-layout class=" rounded">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-white">
            {{ __('Reportes de Visitas a Cubiculos') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-2">
                @livewire('show-visitas-cubiculos')
	    </div>
        </div>
    </div>
</x-app-layout>
