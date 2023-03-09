<div>
    <x-slot name="logo" class="flex-col mx-auto space-y-6">
        <x-jet-authentication-card-logo />
    </x-slot>

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form id="visita">
        {{-- <div>
            <x-jet-label for="control" value="{{ __('Escribe tu número de control') }}" />
            <x-jet-input id="control" class="block mt-1 w-full" type="text" name="text" :value="old('control')" required autofocus />
        </div> --}}
        <div>
            <h1 class="text-xl font-semibold text-center mb-10">Registra tu visita</h1>
            <label for="busqueda" class="text-base">Buscar por n. control o nombre y presione enter:</label>
            <input list="items" wire:model='busqueda' name="busqueda" autofocus
                class="border-gray-300 py-2 px-4 w-full border focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm dark:bg-gray-700 dark:text-white mt-4">
            <datalist id="items">
                @foreach ($alumnos as $alumno)
                    <option value="{{ $alumno->control }}">{{ $alumno->control }} - {{ $alumno->nombre }}</option>
                @endforeach
            </datalist>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button wire:click="save" wire:loading.attr='disabled' wire:target='save'>
                <div class="h-6 w-6 mr-2 ">
                    <x-icons.plus class="bg-black" />
                </div> Registrar
            </x-primary-button>
        </div>
    </form>
</div>

@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    window.livewire.on("registroGuardado", () => {
        document.getElementById("alumno").focus();
    });

    document.getElementById("visita").addEventListener("submit", function(event) {
        event.preventDefault();
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script>
        Livewire.on('alert', function(message){
            Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1200
                }).then(function () {
                document.querySelector('input[name="alumno_id"]').focus();
    });
    })
    </script>
    <script>
        Livewire.on('waring', function(message){
            Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: message,
                    showConfirmButton: false,
                    timer: 1200
                }).then(function () {
                document.querySelector('input[name="alumno_id"]').focus();
    });
    })
    </script>
@endpush