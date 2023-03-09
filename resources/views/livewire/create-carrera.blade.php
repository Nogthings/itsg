<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <x-primary-button wire:click="$set('open', true)">
        <div class="h-6 w-6 mr-2 "><x-icons.plus class="bg-black"/></div> Nueva Carrera
    </x-primary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class=" bg-red-500">
            <p class="text-gray-800 dark:text-white">Crear Carrera</p> 
        </x-slot>
        <x-slot name="content">
            <div class=" space-y-1">
                <x-jet-label value="Nombre de la carrera"/>
                <x-jet-input type="text" class=" w-full" wire:model='nombre_carrera'/>
                <x-jet-input-error for="nombre_carrera"/>
            </div>
            
        </x-slot>
        <x-slot name="footer">
            <div class="flex space-x-3">
                <x-primary-button wire:click='save' wire:loading.attr='disabled' wire:target='save'>
                    Guardar
                </x-primary-button>
                {{-- <span wire:loading wire:target='save'>cargando</span> --}}
                <x-secundary-button wire:click="$set('open', false)">
                    Cancelar
                </x-secundary-button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
