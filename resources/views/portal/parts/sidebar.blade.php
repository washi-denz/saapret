<div x-data="{show:false}" class="" @click.away="show=false">
    <div class="fixed bg-gray-800 h-screen z-50 w-2">
        <div class="h-full absolute flex items-center -left-4">
            <div class="bg-gray-800 rounded-full w-12 h-14 mx-auto text-center cursor-pointer"
                @click="{show = (show) ? false : true}">
                <i class="text-white fa fa-chevron-right fa-fw text-2xl pt-3 pl-3"></i>
            </div>
        </div>
    </div>
    <div class="fixed w-full max-w-xs p-2 bg-gray-800 h-screen z-50" x-show="show"
        x-transition:enter="duration-500" x-transition:enter-start="inset-y-0 -left-full"
        x-transition:enter-end="inset-y-0 left-0" x-transition:leave="duration-700"
        x-transition:leave-start="inset-y-0 left-0" x-transition:leave-end="inset-y-0 -left-full" style="display:none;">
        <div class="absolute top-0 right-0 cursor-pointer m-4 px-2 rounded" @click="show=false">
            <i class="fa fa-times text-gray-300 text-2xl"></i>
        </div>
        <ul class="h-full overflow-y-auto bscroll">
            <li class="my-px">
                <a class="flex text-sm font-bold leading-relaxed mr-4 py-2 whitespace-no-wrap uppercase"
                    href="{{ route('portal.home') }}">
                    <img src="{{ asset('/images/logo.png') }}" class="h-10">
                    <span class="pl-2 text-white">
                        <span class="block">Seguimiento</span> egresados
                    </span>
                </a>
            </li>

            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Registro Egesados</span>
            </li>
            <li class="my-px">
                <a href="{{ route('portal.graduate.index') }}"
                    class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
                    <span class="flex items-center justify-center text-lg text-blue-400">
                        <i class="fa fa-th-list fa-fw"></i>
                    </span>
                    <span class="ml-3">Lista</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
                    <span class="flex items-center justify-center text-lg text-gray-500">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </span>
                    <span class="ml-3">Nuevo</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
                    <span class="flex items-center justify-center text-lg text-gray-500">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </span>
                    <span class="ml-3">Clients</span>
                    <span
                        class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-300 h-6 px-2 rounded-full ml-auto">1k</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
                    <span class="flex items-center justify-center text-lg text-green-400">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </span>
                    <span class="ml-3">Add new</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Datos de Cuenta</span>
            </li>
            <li class="my-px">
                <a href="#" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
                    <span class="flex items-center justify-center text-lg text-gray-500">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </span>
                    <span class="ml-3">Perfil</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
                    <span class="flex items-center justify-center text-lg text-gray-500">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                    </span>
                    <span class="ml-3">Mensajes</span>
                    <span
                        class="flex items-center justify-center text-sm text-red-500 font-semibold bg-red-300 h-6 px-2 rounded-full ml-auto">10</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#" class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
                    <span class="flex items-center justify-center text-lg text-gray-500">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </span>
                    <span class="ml-3">Configuracion</span>
                </a>
            </li>
            <li class="my-px">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700 w-full">
                        <span class="flex items-center justify-center text-lg text-red-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path
                                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-3"> Cerrar Sesion</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
