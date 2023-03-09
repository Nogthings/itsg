<div>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex ml-2 md:mr-24">
                        <img src="http://www.guasave.tecnm.mx/images/ITSG_LOGO_OFFICIAL.png" class=" h-10 mr-3"
                            alt="ITSG Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Biblioteca</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class=" ml-2 mt-1">
                        <button type="button" x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                            x-on:click="darkMode = !darkMode"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            role="switch" aria-checked="false">
                            <span class="sr-only">Dark mode toggle</span>
                            <span x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'"
                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                                <span
                                    x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                    </svg>
                                </span>
                                <span
                                    x-bind:class="darkMode ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ asset('img/user.png') }}" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{ route('dashboard') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile.show') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Perfil</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a :href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();"
                                            class="block cursor-pointer px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Sign out</a>
                                    </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2">
                <li>
                    <x-nav-item :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <svg aria-hidden="true" class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class=" ml-2">Dashboard</span>
                    </x-nav-item>
                </li>
                <li>
                    <x-nav-item :href="route('cubiculos')" :active="request()->routeIs('cubiculos')">
                        <svg fill="currentColor" class="flex-shrink-0 w-5 h-5" viewBox="0 -1.5 35 35" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>folder</title>
                            <path
                                d="M8.431 9.155h20.958c2.158 0 2.158-2.238 0.084-2.238h-14.486c-0.83 0-1.244-1.244-1.244-1.244s-0.581-1.825-1.743-1.825h-10.789c-1.576 0-1.162 1.825-1.162 1.825s2.407 20.47 2.573 21.715 1.453 1.612 1.453 1.612l2.821-18.103c0.208-1.327 1.12-1.7 1.535-1.742zM33.658 9.942h-24.563c-0.733 0-1.328 0.594-1.328 1.327l-2.572 16.4c0 0.734 0.595 1.328 1.328 1.328h24.563c0.732 0 1.328-0.594 1.328-1.328l2.572-16.4c0-0.733-0.593-1.327-1.328-1.327z">
                            </path>
                        </svg>
                        <span class=" ml-2">Cubiculos</span>
                    </x-nav-item>
                </li>
                <li>
                    <x-nav-item :href="route('alumnos')" :active="request()->routeIs('alumnos')">
                        <svg class="flex-shrink-0 w-6 h-6 " viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 2H6C4.34 2 3 3.33 3 4.97V15.88C3 17.52 4.34 18.85 6 18.85H6.76C7.56 18.85 8.32 19.16 8.88 19.72L10.59 21.41C11.37 22.18 12.64 22.18 13.42 21.41L15.13 19.72C15.69 19.16 16.46 18.85 17.25 18.85H18C19.66 18.85 21 17.52 21 15.88V4.97C21 3.33 19.66 2 18 2ZM12 5.75C13.29 5.75 14.33 6.79 14.33 8.08C14.33 9.37 13.29 10.41 12 10.41C10.71 10.41 9.67 9.36 9.67 8.08C9.67 6.79 10.71 5.75 12 5.75ZM14.68 15.06H9.32C8.51 15.06 8.04 14.16 8.49 13.49C9.17 12.48 10.49 11.8 12 11.8C13.51 11.8 14.83 12.48 15.51 13.49C15.96 14.16 15.48 15.06 14.68 15.06Z" />
                        </svg>
                        <span class=" ml-2">Alumnos</span>
                    </x-nav-item>
                </li>
                <li>
                    <x-nav-item :href="route('carreras')" :active="request()->routeIs('carreras')">
                        <svg class="flex-shrink-0 w-6 h-6 " viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM11.5 17.25C11.5 17.61 11.14 17.85 10.81 17.71C9.6 17.19 8.02 16.71 6.92 16.57L6.73 16.55C6.12 16.47 5.62 15.9 5.62 15.28V7.58C5.62 6.81 6.24 6.24 7 6.3C8.25 6.4 10.1 7 11.26 7.66C11.42 7.75 11.5 7.92 11.5 8.09V17.25ZM18.38 15.27C18.38 15.89 17.88 16.46 17.27 16.54L17.06 16.56C15.97 16.71 14.4 17.18 13.19 17.69C12.86 17.83 12.5 17.59 12.5 17.23V8.08C12.5 7.9 12.59 7.73 12.75 7.64C13.91 6.99 15.72 6.41 16.95 6.3H16.99C17.76 6.3 18.38 6.92 18.38 7.69V15.27Z" />
                        </svg>
                        <span class=" ml-2">Carreras</span>
                    </x-nav-item>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 " fill="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM9.11 16.9C9.11 17.18 8.89 17.4 8.61 17.4H5.82C5.54 17.4 5.32 17.18 5.32 16.9V12.28C5.32 11.65 5.83 11.14 6.46 11.14H8.61C8.89 11.14 9.11 11.36 9.11 11.64V16.9ZM13.89 16.9C13.89 17.18 13.67 17.4 13.39 17.4H10.6C10.32 17.4 10.1 17.18 10.1 16.9V7.74C10.1 7.11 10.61 6.6 11.24 6.6H12.76C13.39 6.6 13.9 7.11 13.9 7.74V16.9H13.89ZM18.68 16.9C18.68 17.18 18.46 17.4 18.18 17.4H15.39C15.11 17.4 14.89 17.18 14.89 16.9V13.35C14.89 13.07 15.11 12.85 15.39 12.85H17.54C18.17 12.85 18.68 13.36 18.68 13.99V16.9Z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Reportes</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                        <li>
                            <x-nav-item :href="route('reportes')" :active="request()->routeIs('reportes')" class=" ml-6 ">
                                <svg fill="currentColor" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="flex-shrink-0 w-5 h-5" viewBox="0 0 55.203 53.747" xml:space="preserve">
                                    <path
                                        d="M53.666,20.361c1.014,0,1.537-0.276,1.537-0.711c0-0.206-0.117-0.447-0.354-0.707c-0.146-0.154-0.332-0.318-0.561-0.487
                                        L30.197,0.785c-1.428-1.046-3.765-1.046-5.196,0L0.913,18.457C0.296,18.908,0,19.32,0,19.65c0,0.136,0.05,0.255,0.152,0.358
                                        c0.225,0.222,0.689,0.353,1.384,0.353h4.897v21.144H5.68c-1.235,0-2.238,1.004-2.238,2.238v2.562H2.458
                                        c-1.235,0-2.237,1.002-2.237,2.233v2.971c0,1.236,1.002,2.238,2.237,2.238h50.071c1.236,0,2.238-1.002,2.238-2.238v-2.971
                                        c0-1.231-1.002-2.233-2.238-2.233h-0.984v-2.562c0-1.234-1.002-2.238-2.236-2.238h-0.754V20.361H53.666z M18.272,41.504h-5.228
                                        V20.361h5.228V41.504z M30.105,41.504h-5.227V20.361h5.227V41.504z M27.601,13.337c-1.545,0-2.793-1.248-2.793-2.792
                                        c0-1.542,1.248-2.79,2.793-2.79c1.543,0,2.793,1.248,2.793,2.79C30.395,12.09,29.145,13.337,27.601,13.337z M41.947,41.504h-5.232
                                        V20.361h5.232V41.504z" />
                                </svg>
                                <span class=" ml-3 ">Biblioteca</span>
                            </x-nav-item>
                        </li>
                        <li>
                            <x-nav-item :href="route('reportesCubiculo')" :active="request()->routeIs('reportesCubiculo')" class="ml-6">
                                <svg fill="currentColor" class="flex-shrink-0 w-5 h-5" viewBox="0 -1.5 35 35"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <title>folder</title>
                                    <path
                                        d="M8.431 9.155h20.958c2.158 0 2.158-2.238 0.084-2.238h-14.486c-0.83 0-1.244-1.244-1.244-1.244s-0.581-1.825-1.743-1.825h-10.789c-1.576 0-1.162 1.825-1.162 1.825s2.407 20.47 2.573 21.715 1.453 1.612 1.453 1.612l2.821-18.103c0.208-1.327 1.12-1.7 1.535-1.742zM33.658 9.942h-24.563c-0.733 0-1.328 0.594-1.328 1.327l-2.572 16.4c0 0.734 0.595 1.328 1.328 1.328h24.563c0.732 0 1.328-0.594 1.328-1.328l2.572-16.4c0-0.733-0.593-1.327-1.328-1.327z">
                                    </path>
                                </svg>
                                <span class=" ml-3 ">Cubiculos</span>
                            </x-nav-item>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <x-nav-item :href="route('crear-usuario')" :active="request()->routeIs('crear-usuario')">
                        <svg class="flex-shrink-0 w-6 h-6 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25007 2.38782C8.54878 2.0992 10.1243 2 12 2C13.8757 2 15.4512 2.0992 16.7499 2.38782C18.06 2.67897 19.1488 3.176 19.9864 4.01358C20.824 4.85116 21.321 5.94002 21.6122 7.25007C21.9008 8.54878 22 10.1243 22 12C22 13.8757 21.9008 15.4512 21.6122 16.7499C21.321 18.06 20.824 19.1488 19.9864 19.9864C19.1488 20.824 18.06 21.321 16.7499 21.6122C15.4512 21.9008 13.8757 22 12 22C10.1243 22 8.54878 21.9008 7.25007 21.6122C5.94002 21.321 4.85116 20.824 4.01358 19.9864C3.176 19.1488 2.67897 18.06 2.38782 16.7499C2.0992 15.4512 2 13.8757 2 12C2 10.1243 2.0992 8.54878 2.38782 7.25007C2.67897 5.94002 3.176 4.85116 4.01358 4.01358C4.85116 3.176 5.94002 2.67897 7.25007 2.38782ZM12 6C9.79086 6 8 7.79086 8 10C8 12.2091 9.79086 14 12 14C14.2091 14 16 12.2091 16 10C16 7.79086 14.2091 6 12 6ZM18.3775 17.2942C18.7303 17.8695 18.6055 18.63 18.0369 18.9935C17.5199 19.3241 16.9158 19.5265 16.3159 19.6598C15.2322 19.9006 13.8299 20 11.9998 20C10.1698 20 8.76744 19.9006 7.68381 19.6598C7.09516 19.529 6.50205 19.3319 5.99131 19.012C5.41247 18.6495 5.28523 17.8786 5.64674 17.2991C6.06303 16.6318 6.63676 16.1075 7.40882 15.7344C8.58022 15.1684 10.1157 15 11.9996 15C13.8771 15 15.4109 15.1548 16.5807 15.7047C17.3727 16.077 17.9572 16.6089 18.3775 17.2942Z" fill="currentColor"/>
                            </svg>
                        <span class=" ml-2">Usuarios</span>
                    </x-nav-item>
                </li> --}}
                <li>
                    <x-nav-item :href="route('ayuda')" :active="request()->routeIs('ayuda')">
                        <svg class="flex-shrink-0 w-6 h-6 " viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 5C.892 5 0 5.892 0 7v7c0 1.108.892 2 2 2h9c1.108 0 2-.892 2-2v-3.8L16 7h-3c0-1.108-.892-2-2-2zm4.438 2C7.75 6.926 8.926 7.936 9 9.25c0 1.121-.308 1.544-1.281 2.281a1.68 1.68 0 00-.281.25c-.04.05-.032.033-.032.031.006.423-.39.782-.812.782a.79.79 0 01-.781-.782c0-.401.179-.754.375-1a3.14 3.14 0 01.562-.562 3.85 3.85 0 00.563-.531c.074-.09.097-.24.093-.344v-.031a.785.785 0 00-.843-.75c-.451.025-.813.362-.851.758a.697.697 0 01-.718.648.816.816 0 01-.781-.594 1.725 1.725 0 01.01-.533c.005-.014.006-.03.012-.043.202-1.024 1.09-1.768 2.203-1.83zm.156 6.406a.82.82 0 01.812.813c0 .442-.37.781-.812.781a.768.768 0 01-.781-.781c0-.442.339-.813.78-.813zM2 1C.892 1 0 1.892 0 3v.568A3.918 3.918 0 012 3h9c1.376 0 2.55.763 3.268 1.848L16 3h-3c0-1.108-.892-2-2-2z"
                                fill="currentColor" />
                        </svg>
                        <span class=" ml-2">Ayuda</span>
                    </x-nav-item>
                </li>
            </ul>
        </div>
    </aside>
</div>
