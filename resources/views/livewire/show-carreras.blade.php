<div class="relative shadow-md sm:rounded-lg " wire:init='loadCarreras'>

    <div class="flex items-center space-x-2 p-2 justify-between">
        <div class="flex items-center space-x-2">
            <span class="text-gray-800 dark:text-gray-50">Mostrar</span>
            <select wire:model='cantidad'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-20 focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="10" selected>10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span class="text-gray-800 dark:text-gray-50">elementos</span>
        </div>
        @livewire('create-carrera')
    </div>
    <div class="p-2 flex items-center justify-center">
        <div class="relative w-full mr-4">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <div class="w-5 h-5 text-gray-500 dark:text-gray-400">
                    <x-icons.search />
                </div>
            </div>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buscar Carrera" wire:model='busqueda'>
        </div>
    </div>
    @if (count($carreras))
        <div class="rounded">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="oreder('id')">
                            ID
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt ml-2 mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down ml-2 mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort ml-2 mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="oreder('nombre_carrera')">
                            Nombre
                            @if ($sort == 'nombre_carrera')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt ml-2 mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down ml-2 mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort ml-2 mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="(oreder('status')">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Accion
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carreras as $carrera)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $carrera->id }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $carrera->nombre_carrera }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    @if ($carrera->status == 1)
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div><span
                                            hidden>{{ $carrera->status }}</span> Activo
                                    @else
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div><span
                                            hidden>{{ $carrera->status }}</span> Inactivo
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class=" flex space-x-1 ">
                                    <div>
                                        {{-- @livewire('edit-carrera', ['carrera' => $carrera, key($carrera->id)]) --}}
                                        <a wire:click="edit({{ $carrera }})"
                                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-800 dark:hover:bg-indigo-400 bg-indigo-600 w-8 h-8 cursor-pointer">
                                            <div
                                                class="flex-shrink-0 w-4 h-4 stroke-white transition duration-75 dark:stroke-white group-hover:stroke-indigo-600 dark:group-hover:stroke-indigo-600">
                                                <x-icons.edit />
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a wire:click="$emit('deleteCarrera', {{ $carrera->id }})"
                                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-800 dark:hover:bg-indigo-400 bg-indigo-600 w-8 h-8 cursor-pointer">
                                            <div
                                                class="flex-shrink-0 w-4 h-4 stroke-white transition duration-75 dark:stroke-white group-hover:stroke-indigo-600 dark:group-hover:stroke-indigo-600">
                                                <x-icons.trash />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($carreras->hasPages(2))
            <div class=" px-6 py-3">
                {{ $carreras->links() }}
            </div>
        @endif
    @else
        <div class=" bg-gray-50 dark:bg-gray-700 rounded shadow p-24 ">
            <p class=" text-xl text-center font-semibold text-gray-800 dark:text-white">No hay conincidencias.</p>
        </div>
    @endif

    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title" class=" bg-red-500">
            <p class="text-gray-800 dark:text-white">Editar Datos de la Carrera</p>
        </x-slot>
        <x-slot name="content">
            <div class=" space-y-1">
                <x-jet-label value="Nombre de la carrera" />
                <x-jet-input type="text" class=" w-full" wire:model='carrera.nombre_carrera' />
                <x-jet-input-error for="nombre_carrera" />
            </div>

        </x-slot>
        <x-slot name="footer">
            <div class="flex space-x-3">
                <x-primary-button wire:click='update' wire:loading.attr='disabled' wire:target='update'>
                    Actualizar
                </x-primary-button>
                {{-- <span wire:loading wire:target='save'>cargando</span> --}}
                <x-secundary-button wire:click="$set('open_edit', false)">
                    Cancelar
                </x-secundary-button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>

    @push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            Livewire.on('deleteCarrera', carreraId => {
                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "No puedes revertir estos cambios",
                    icon: 'Cuidado',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminalo'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('show-carreras', 'delete', carreraId);

                        Swal.fire(
                            'Eliminado',
                            'El registro fue eliminado.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush

</div>
