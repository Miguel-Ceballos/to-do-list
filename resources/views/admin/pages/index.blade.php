<x-head/>
<!-- component -->
<div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
    <div class="container xl:max-w-6xl mx-auto px-4">
        @auth()
            <div class="flex items-center gap-3">
                <a class="p-6">
                    Hi
                    <span class="font-bold">{{ auth()->user()->username }}</span>
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="font-bold uppercase">Log out</button>
                </form>
            </div>
        @else
            <div class="text-right">
                <a href="{{ route('register') }}" class="p-6 font-bold uppercase">Register</a>
                <a href="{{ route('login') }}" class="font-bold uppercase">Login</a>
            </div>
        @endauth

        <header class="text-center mx-auto mb-12 lg:px-20">
            <h1 class="text-7xl leading-normal mb-2 font-bold text-black">TO DO LIST</h1>
            <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Hola Miguel Ceballos, ¿Estás listo
                para un nuevo día productivo?</p>
        </header>
        <div class="flex flex-wrap flex-row -mx-4 text-center it">
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/2 lg:px-6 wow fadeInUp"
                 data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
{{--                <a href="{{route('create-task')}}">--}}
                <a href="{{route('create-task')}}">
                    <div
                        class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                        <div class="inline-block text-gray-900 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                 style="enable-background:new 0 0 512 512;" xml:space="preserve" width="2rem"
                                 height="2rem">
                                <g>
                                    <path
                                        d="M480,224H288V32c0-17.673-14.327-32-32-32s-32,14.327-32,32v192H32c-17.673,0-32,14.327-32,32s14.327,32,32,32h192v192   c0,17.673,14.327,32,32,32s32-14.327,32-32V288h192c17.673,0,32-14.327,32-32S497.673,224,480,224z"/>
                                </g>
                            </svg>
                        </div>
                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">New Task</h3>
                        <p class="text-gray-500">This is a wider card with supporting text below as a natural
                            content.</p>
                    </div>
                </a>
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/2 lg:px-6 wow fadeInUp"
                 data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <a href="{{route('create.page')}}">
                    <div
                        class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                        <div class="inline-block text-gray-900 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                 style="enable-background:new 0 0 512 512;" xml:space="preserve" width="2rem"
                                 height="2rem">
                                <g>
                                    <path
                                        d="M480,224H288V32c0-17.673-14.327-32-32-32s-32,14.327-32,32v192H32c-17.673,0-32,14.327-32,32s14.327,32,32,32h192v192   c0,17.673,14.327,32,32,32s32-14.327,32-32V288h192c17.673,0,32-14.327,32-32S497.673,224,480,224z"/>
                                </g>
                            </svg>
                        </div>
                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">New Page</h3>
                        <p class="text-gray-500">This is a wider card with supporting text below as a natural
                            content.</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="flex flex-wrap flex-row -mx-4 text-center">
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                 data-wow-duration="1s" data-wow-delay=".1s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div
                    class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                    <div class="inline-block text-gray-900 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="2rem" height="2rem">
                            <g id="_01_align_center" data-name="01 align center">
                                <path
                                    d="M13.338.833a2,2,0,0,0-2.676,0L0,10.429v10.4a3.2,3.2,0,0,0,3.2,3.2H20.8a3.2,3.2,0,0,0,3.2-3.2v-10.4ZM15,22.026H9V17a3,3,0,0,1,6,0Zm7-1.2a1.2,1.2,0,0,1-1.2,1.2H17V17A5,5,0,0,0,7,17v5.026H3.2a1.2,1.2,0,0,1-1.2-1.2V11.319l10-9,10,9Z"/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Personal Page</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                 data-wow-duration="1s" data-wow-delay=".3s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div
                    class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                    <div class="inline-block text-gray-900 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="2rem"
                             height="2rem">
                            <path
                                d="M19,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H5A5.006,5.006,0,0,0,0,9V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V9A5.006,5.006,0,0,0,19,4ZM11,2h2a3,3,0,0,1,2.816,2H8.184A3,3,0,0,1,11,2ZM5,6H19a3,3,0,0,1,3,3v3H2V9A3,3,0,0,1,5,6ZM19,22H5a3,3,0,0,1-3-3V14h9v1a1,1,0,0,0,2,0V14h9v5A3,3,0,0,1,19,22Z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Work</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                 data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <div
                    class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor"
                             class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                            <path
                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Finanzas</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                 data-wow-duration="1s" data-wow-delay=".1s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div
                    class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                    <div class="inline-block text-gray-900 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor"
                             class="bi bi-wallet2" viewBox="0 0 16 16">
                            <path
                                d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">School</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                 data-wow-duration="1s" data-wow-delay=".3s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div
                    class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor"
                             class="bi bi-funnel" viewBox="0 0 16 16">
                            <path
                                d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Optimize conversions</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
