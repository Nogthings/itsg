<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

        <div class="flex items-center">
            <p class="text-xl dark:text-gray-200">
                Filtrar visitas por fecha:
            </p>
            <span class="mx-4 dark:text-gray-200">Desde el: </span>
            <div class="relative">
                <input name="start" type="date" wire:model="fechaInicio"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <span class="mx-4 dark:text-gray-200">Hasta el:</span>
            <div class="relative">
                <input name="end" type="date" wire:model="fechaFin"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="flex flex-col space-y-2 ml-4">
                <x-jet-button class="ml-4 text" wire:click='filtrar'>
                  <svg class="flex-shrink-0 w-5 h-5 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 20.5H10C9.80189 20.4974 9.61263 20.4176 9.47253 20.2775C9.33244 20.1374 9.25259 19.9481 9.25 19.75V12L3.9 4.69C3.81544 4.58007 3.76395 4.44832 3.75155 4.31018C3.73915 4.17204 3.76636 4.03323 3.83 3.91C3.89375 3.78712 3.98984 3.68399 4.10792 3.61173C4.226 3.53947 4.36157 3.50084 4.5 3.5H19.5C19.6384 3.50084 19.774 3.53947 19.8921 3.61173C20.0101 3.68399 20.1062 3.78712 20.17 3.91C20.2336 4.03323 20.2608 4.17204 20.2484 4.31018C20.236 4.44832 20.1846 4.58007 20.1 4.69L14.75 12V19.75C14.7474 19.9481 14.6676 20.1374 14.5275 20.2775C14.3874 20.4176 14.1981 20.4974 14 20.5ZM10.75 19H13.25V11.75C13.2492 11.5907 13.302 11.4357 13.4 11.31L18 5H6L10.62 11.31C10.718 11.4357 10.7708 11.5907 10.77 11.75L10.75 19Z" fill="currentColor"/>
                  </svg>
                  <span>Filtrar</span> 
                </x-jet-button>
                <x-jet-button class="ml-4" wire:click='eliminarFiltro'>
                    <svg class="flex-shrink-0 w-5 h-5 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.17 3.91C20.1063 3.78712 20.0102 3.68399 19.8921 3.61173C19.774 3.53947 19.6384 3.50084 19.5 3.5H12.5C12.3011 3.5 12.1103 3.57902 11.9697 3.71967C11.829 3.86032 11.75 4.05109 11.75 4.25C11.75 4.44891 11.829 4.63968 11.9697 4.78033C12.1103 4.92098 12.3011 5 12.5 5H18L16.15 7.56C16.0333 7.71913 15.9846 7.9181 16.0146 8.11314C16.0446 8.30818 16.1509 8.4833 16.31 8.6C16.4691 8.7167 16.6681 8.7654 16.8631 8.73539C17.0582 8.70538 17.2333 8.59913 17.35 8.44L20.1 4.69C20.1846 4.58007 20.2361 4.44832 20.2484 4.31018C20.2608 4.17204 20.2336 4.03323 20.17 3.91Z" fill="currentColor"/>
                        <path d="M8.65 3.72005C8.65 3.72005 8.65 3.72005 8.6 3.72005C8.54296 3.67085 8.47893 3.63041 8.41 3.60005C8.33943 3.57294 8.26534 3.5561 8.19 3.55005H4.5C4.36157 3.55089 4.226 3.58952 4.10792 3.66178C3.98984 3.73404 3.89375 3.83717 3.83 3.96005C3.76636 4.08328 3.73915 4.22209 3.75155 4.36023C3.76395 4.49837 3.81544 4.63011 3.9 4.74005L9.25 12V19.75C9.25259 19.9482 9.33244 20.1374 9.47253 20.2775C9.61263 20.4176 9.80189 20.4975 10 20.5H14C14.1981 20.4975 14.3874 20.4176 14.5275 20.2775C14.6676 20.1374 14.7474 19.9482 14.75 19.75V12L14.81 11.91L18.47 15.53C18.5392 15.6002 18.6218 15.6557 18.7128 15.6935C18.8038 15.7313 18.9015 15.7505 19 15.75C19.0986 15.7511 19.1964 15.7321 19.2875 15.6943C19.3786 15.6565 19.4611 15.6006 19.53 15.53C19.6704 15.3894 19.7493 15.1988 19.7493 15C19.7493 14.8013 19.6704 14.6107 19.53 14.47L8.65 3.72005ZM13.4 11.31C13.302 11.4357 13.2492 11.5907 13.25 11.75V19H10.75V11.75C10.7508 11.5907 10.698 11.4357 10.6 11.31L6 5.00005H7.82L13.73 10.85L13.4 11.31Z" fill="currentColor"/>
                    </svg>
                    <span>Eliminar</span>
                </x-jet-button>
            </div>
        </div>


    

</div>
