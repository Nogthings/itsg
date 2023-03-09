<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-primary-button wire:click="$set('open', true)">
        <div class="h-6 w-6 mr-2 "><x-icons.plus class="bg-black"/></div> Nuevo Alumno
    </x-primary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class=" bg-red-500">
            <p class="text-gray-800 dark:text-white">Registrar Nuevo Alumno</p> 
        </x-slot>
        <x-slot name="content" class=" space-y-5">
            <div class=" space-y-5">
                <div class=" space-y-1">
                    <x-jet-label value="Nombre completo del Alumno"/>
                    <x-jet-input type="text" class=" w-full" wire:model='nombre' autofocus/>
                    <x-jet-input-error for="nombre"/>
                </div>
    
                <div class=" space-y-1">
                    <x-jet-label value="Número de Control"/>
                    <x-jet-input type="text" class=" w-full" wire:model='control'/>
                    <x-jet-input-error for="control"/>
                </div>
    
                <div class=" space-y-1 ">
                    <x-jet-label value="Escanear Credencial"/>
                    <x-jet-input type="text" class=" w-full" wire:model='credencial'/>
                    <x-jet-input-error for="credencial"/>
                </div>
    
                <div class=" space-y-1 ">
                    <x-jet-label value="Seleccione la Carrera"/>
                    <select wire:model='carrera_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>-- Seleccione una opcion --</option>
                        @foreach ($carreras as $carrera)
                            <option value="{{$carrera->id}}">{{$carrera->nombre_carrera}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="carrera_id"/>
                </div>
                <div class=" space-y-1 ">
                    <x-jet-label value="Sexo"/>
                    <select wire:model='genero' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>-- Seleccione una opcion --</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <x-jet-input-error for="genero"/>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="flex space-x-3">
                <x-primary-button wire:click="save" wire:loading.attr='disabled' wire:target='save'>
                    Guardar
                </x-primary-button>
                {{-- <span wire:loading wire:target='save'>cargando</span> --}}
                <x-secundary-button wire:click="cancel">
                    Cancelar
                </x-secundary-button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>

</div>
