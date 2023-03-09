<div class="relative shadow-md sm:rounded-lg" wire:init='loadCubiculos'>
    {{-- Be like water. --}}
    <div class="flex items-center space-x-2 pb-4 pt-2 justify-end">
        @livewire('create-reserva-cubiculo')
    </div>

    @if (count($cubiculos))
        <div class="rounded">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('id')">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('nombre')">
                            Alumno
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('control')">
                            #Control
                        </th>
                        <th>
                            Carrera
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('credencial')">
                            Cubiculo
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="(order('status')">
                            Desde
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hasta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cubiculos as $cubiculo)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $cubiculo->id }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $cubiculo->nombre_alumno }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $cubiculo->control_alumno }}
                            </td>
                            <td>
                                {{$cubiculo->carrera->nombre_carrera}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $cubiculo->cubiculo }}
                            </td>
                            <td class="px-6 py-4">
                                {{$cubiculo->hora_inicio}}
                            </td>
                            <td class="px-6 py-4">
                                {{$cubiculo->hora_fin}}
                            </td>
                            <td class="px-6 py-4">
                                {{$cubiculo->fecha}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class=" bg-gray-50 dark:bg-gray-700 rounded shadow p-24 ">
            <p class=" text-xl text-center font-semibold text-gray-800 dark:text-white">No hay Reservas para hoy.</p>
        </div>
    @endif

</div>
