<div>
    {{-- Stop trying to control. --}}
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-800 dark:text-gray-50">Mostrar</span>
                            <select wire:model='cantidad'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-20 focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="text-gray-800 dark:text-gray-50">elementos</span>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <input name="start" type="datetime-local" wire:model="fechaInicio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <span class="mx-4 text-gray-500">hasta</span>
                        <div class="relative">
                            <input name="end" type="datetime-local" wire:model="fechaFin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" wire:click='export' {{count($visitas) == 0 ? 'disabled' : ''}}
                            class="flex disabled:bg-gray-700 disabled:hover:bg-gray-700 dark:disabled:bg-gray-100 dark:disabled:hover:bg-gray-100 dark:disabled:text-slate-900 uppercase items-center justify-center text-white bg-indigo-600 hover:bg-indigo-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-base px-4 py-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <linearGradient id="a" x1="4.494" y1="-2092.086" x2="13.832"
                                        y2="-2075.914" gradientTransform="translate(0 2100)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#18884f" />
                                        <stop offset="0.5" stop-color="#117e43" />
                                        <stop offset="1" stop-color="#0b6631" />
                                    </linearGradient>
                                </defs>
                                <title>file_type_excel</title>
                                <path
                                    d="M19.581,15.35,8.512,13.4V27.809A1.192,1.192,0,0,0,9.705,29h19.1A1.192,1.192,0,0,0,30,27.809h0V22.5Z"
                                    style="fill:#185c37" />
                                <path
                                    d="M19.581,3H9.705A1.192,1.192,0,0,0,8.512,4.191h0V9.5L19.581,16l5.861,1.95L30,16V9.5Z"
                                    style="fill:#21a366" />
                                <path d="M8.512,9.5H19.581V16H8.512Z" style="fill:#107c41" />
                                <path
                                    d="M16.434,8.2H8.512V24.45h7.922a1.2,1.2,0,0,0,1.194-1.191V9.391A1.2,1.2,0,0,0,16.434,8.2Z"
                                    style="opacity:0.10000000149011612;isolation:isolate" />
                                <path
                                    d="M15.783,8.85H8.512V25.1h7.271a1.2,1.2,0,0,0,1.194-1.191V10.041A1.2,1.2,0,0,0,15.783,8.85Z"
                                    style="opacity:0.20000000298023224;isolation:isolate" />
                                <path
                                    d="M15.783,8.85H8.512V23.8h7.271a1.2,1.2,0,0,0,1.194-1.191V10.041A1.2,1.2,0,0,0,15.783,8.85Z"
                                    style="opacity:0.20000000298023224;isolation:isolate" />
                                <path
                                    d="M15.132,8.85H8.512V23.8h6.62a1.2,1.2,0,0,0,1.194-1.191V10.041A1.2,1.2,0,0,0,15.132,8.85Z"
                                    style="opacity:0.20000000298023224;isolation:isolate" />
                                <path
                                    d="M3.194,8.85H15.132a1.193,1.193,0,0,1,1.194,1.191V21.959a1.193,1.193,0,0,1-1.194,1.191H3.194A1.192,1.192,0,0,1,2,21.959V10.041A1.192,1.192,0,0,1,3.194,8.85Z"
                                    style="fill:url(#a)" />
                                <path
                                    d="M5.7,19.873l2.511-3.884-2.3-3.862H7.758L9.013,14.6c.116.234.2.408.238.524h.017c.082-.188.169-.369.26-.546l1.342-2.447h1.7l-2.359,3.84,2.419,3.905H10.821l-1.45-2.711A2.355,2.355,0,0,1,9.2,16.8H9.176a1.688,1.688,0,0,1-.168.351L7.515,19.873Z"
                                    style="fill:#fff" />
                                <path d="M28.806,3H19.581V9.5H30V4.191A1.192,1.192,0,0,0,28.806,3Z"
                                    style="fill:#33c481" />
                                <path d="M19.581,16H30v6.5H19.581Z" style="fill:#107c41" />
                            </svg>
                            Excel
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    @if (count($visitas))
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">ID</th>
                                    <th scope="col" class="px-4 py-3">Nombre</th>
                                    <th scope="col" class="px-4 py-3">Sexo</th>
                                    <th scope="col" class="px-4 py-3">Control</th>
                                    <th scope="col" class="px-4 py-3">carrera</th>
                                    <th scope="col" class="px-4 py-3">fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visitas as $visita)
                                    <tr class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $visita->id }}</th>
                                        <td class="px-4 py-3">{{ $visita->alumno->nombre }}</td>
                                        <td class="px-4 py-3">{{ $visita->alumno->genero }}</td>
                                        <td class="px-4 py-3">{{ $visita->alumno->control }}</td>
                                        <td class="px-4 py-3">{{ $visita->alumno->carrera->nombre_carrera }}</td>
                                        <td class="px-4 py-3">{{ $visita->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                    aria-label="Table navigation">
                    {{ $visitas->links() }}
                </nav>
            @else
                <div class=" bg-gray-50 dark:bg-gray-700 rounded shadow p-24 ">
                    <p class=" text-xl text-center font-semibold text-gray-800 dark:text-white">No hay conincidencias.
                    </p>
                </div>
                @endif

            </div>
        </div>
    </section>

    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    @endpush
</div>
