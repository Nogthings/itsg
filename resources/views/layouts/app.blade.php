<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-white dark:bg-slate-700" x-data="{ darkMode: false }" x-init="
if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
  localStorage.setItem('darkMode', JSON.stringify(true));
}
darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
    <div x-bind:class="{ 'dark': darkMode === true }" class="bg-gray-100 dark:bg-gray-900">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            {{-- @livewire('navigation-menu') --}}
            @include('components.aside')


            <div class="p-4 sm:ml-64">
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white dark:bg-gray-800 shadow rounded mb-2">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    <!-- Page Content -->
                    <main class=" rounded">
                        {{ $slot }}
                    </main>
                </div>
            </div>

        </div>

    </div>

    @stack('modals')

    @livewireScripts

    @stack('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <script>
        Livewire.on('alert', function(message){
            // Swal.fire(
            //     '¡Operacion exitosa!',
            //     message,
            //     'success'
            // )
            Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1200
                })
        })
    </script>
</body>

</html>
