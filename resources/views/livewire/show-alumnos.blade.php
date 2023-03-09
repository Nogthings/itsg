<div class="relative shadow-md sm:rounded-lg " wire:init='loadAlumnos'>

    <div class="flex items-center space-x-2 p-2 justify-between">
        <div class="flex items-center space-x-2">
            <span class="text-gray-800 dark:text-gray-50">Mostrar</span>
            <select wire:model='cantidad' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-20 focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="10" selected>10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span class="text-gray-800 dark:text-gray-50">elementos</span>
        </div>
        @livewire('create-alumno')
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
    @if (count($alumnos))
        <div class="rounded">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('id')">
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
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('nombre')">
                            Nombre
                            @if ($sort == 'nombre')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt ml-2 mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down ml-2 mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort ml-2 mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('control')">
                            #Control
                            @if ($sort == 'control')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt ml-2 mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down ml-2 mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort ml-2 mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('credencial')">
                            Credencial ID
                            @if ($sort == 'credencial')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt ml-2 mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down ml-2 mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort ml-2 mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="(order('status')">
                            Carrera
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="(order('status')">
                            Sexo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Accion
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $alumno->id }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $alumno->nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $alumno->control }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $alumno->credencial }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    {{$alumno->carrera->nombre_carrera}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    {{$alumno->genero}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class=" flex space-x-1 ">
                                    <div>
                                        {{-- @livewire('edit-carrera', ['carrera' => $carrera, key($carrera->id)]) --}}
                                        <a wire:click="edit({{$alumno}})"
                                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-indigo-800 dark:hover:bg-indigo-400 bg-indigo-600 w-8 h-8 cursor-pointer">
                                            <div
                                                class="flex-shrink-0 w-4 h-4 stroke-white transition duration-75 dark:stroke-white group-hover:stroke-indigo-600 dark:group-hover:stroke-indigo-600">
                                                <x-icons.edit />
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a wire:click="$emit('deleteCarrera', {{$alumno->id}})"
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
        @if ($alumnos->hasPages(2))
        <div class=" px-6 py-3">
            {{$alumnos->links()}}
        </div>
        @endif
    @else
        <div class=" bg-gray-50 dark:bg-gray-700 rounded shadow p-24 ">
            <p class=" text-xl text-center font-semibold text-gray-800 dark:text-white">No hay conincidencias.</p>
        </div>
    @endif


    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title" class=" bg-red-500">
            <p class="text-gray-800 dark:text-white">Editar Datos del Alumno</p>
        </x-slot>

        <x-slot name="content">
            <div class=" space-y-5">
                <div class=" space-y-1">
                    <x-jet-label value="Nombre de la carrera" />
                    <x-jet-input type="text" class=" w-full" wire:model='alumno.nombre'/>
                    <x-jet-input-error for="nombre" />
                </div>
                <div class=" space-y-1">
                    <x-jet-label value="Número de Control" />
                    <x-jet-input type="text" class=" w-full" wire:model='alumno.control'/>
                    <x-jet-input-error for="nombre" />
                </div>
                <div class=" space-y-1">
                    <x-jet-label value="Escanear Credencial" />
                    <x-jet-input type="text" class=" w-full" wire:model='alumno.credencial'/>
                    <x-jet-input-error for="nombre" />
                </div>
                <div class=" space-y-1 ">
                    <x-jet-label value="Sexo"/>
                    <select wire:model='alumno.genero' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>-- Seleccione una opcion --</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <x-jet-input-error for="genero"/>
                </div>
                <div class=" space-y-1 ">
                    <x-jet-label value="Seleccione la Carrera"/>
                    <select wire:model='alumno.carrera_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>-- Seleccione una opcion --</option>
                        @foreach ($carreras as $carrera)
                            <option value="{{$carrera->id}}">{{$carrera->nombre_carrera}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="carrera_id"/>
                </div>
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
            Livewire.on('deleteCarrera', alumnoId=>{
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

                Livewire.emitTo('show-alumnos', 'delete', alumnoId);

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
