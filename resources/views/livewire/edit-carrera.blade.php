<div>

    <a wire:click="$set('open', true)"
        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-800 dark:hover:bg-indigo-400 bg-indigo-600 w-8 h-8 cursor-pointer">
        <div
            class="flex-shrink-0 w-4 h-4 stroke-white transition duration-75 dark:stroke-white group-hover:stroke-indigo-600 dark:group-hover:stroke-indigo-600">
            <x-icons.edit />
        </div>
    </a>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class=" bg-red-500">
            <p class="text-gray-800 dark:text-white">Editar Datos de la Carrera</p>
        </x-slot>
        <x-slot name="content">
            <div class=" space-y-1">
                <x-jet-label value="Nombre de la carrera" />
                <x-jet-input type="text" class=" w-full" wire:model='carrera.nombre'/>
                <x-jet-input-error for="nombre" />
            </div>

        </x-slot>
        <x-slot name="footer">
            <div class="flex space-x-3">
                <x-primary-button wire:click='update' wire:loading.attr='disabled' wire:target='update'>
                    Actualizar
                </x-primary-button>
                {{-- <span wire:loading wire:target='save'>cargando</span> --}}
                <x-secundary-button wire:click="$set('open', false)">
                    Cancelar
                </x-secundary-button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
