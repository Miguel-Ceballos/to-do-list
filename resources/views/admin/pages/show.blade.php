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

        <div class="flex flex-wrap flex-row -mx-4 text-center">
            @if(count($tasks))
                @foreach($tasks as $task)
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                         data-wow-duration="1s" data-wow-delay=".1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">

                        <div
                            class="py-8 px-12 mb-12 bg-gray-100 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-lg">
                            <div class="inline-block text-gray-900 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="2rem"
                                     height="2rem">
                                    <g id="_01_align_center" data-name="01 align center">
                                        <path
                                            d="M13.338.833a2,2,0,0,0-2.676,0L0,10.429v10.4a3.2,3.2,0,0,0,3.2,3.2H20.8a3.2,3.2,0,0,0,3.2-3.2v-10.4ZM15,22.026H9V17a3,3,0,0,1,6,0Zm7-1.2a1.2,1.2,0,0,1-1.2,1.2H17V17A5,5,0,0,0,7,17v5.026H3.2a1.2,1.2,0,0,1-1.2-1.2V11.319l10-9,10,9Z"/>
                                    </g>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{$task->task}}</h3>
                            <p class="text-gray-500">{{ $task->comment }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="flex text-center text-sm">There are no tasks created.</p>
            @endif

        </div>

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="1rem" height="1rem">
                <path
                    d="M17.17,24a1,1,0,0,1-.71-.29L8.29,15.54a5,5,0,0,1,0-7.08L16.46.29a1,1,0,1,1,1.42,1.42L9.71,9.88a3,3,0,0,0,0,4.24l8.17,8.17a1,1,0,0,1,0,1.42A1,1,0,0,1,17.17,24Z"/>
            </svg>
            <a href="{{ route('pages.index', auth()->user()->username) }}" class="text-gray-700 ml-2">
                Back to Home
            </a>
        </div>
    </div>
</div>
<x-footer/>
