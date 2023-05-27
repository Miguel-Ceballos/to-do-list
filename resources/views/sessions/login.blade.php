<x-head/>

<div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
    <div class="container xl:max-w-4xl mx-auto px-4">
        <header class="text-center mx-auto mb-12 lg:px-20">
            <h2 class="text-2xl leading-normal mb-10 font-bold text-black">LOGIN</h2>
            <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Save time managing advertising
                &amp; Content for your business.</p>
        </header>
        <form method="POST" action="{{route('login')}}" class="mt-10" novalidate>
            @csrf

            @if(session('message'))
                <p class="bg-red-500 text-white my-3 rounded-lg text-sm p-2">{{ session('message') }}</p>
            @endif

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full @error('email') border-red-500 @enderror"
                       type="email"
                       name="email"
                       id="email"
                       value="{{ old('email') }}"
                       required
                >
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password"
                >
                    Password
                </label>

                <input class="border border-gray-400 p-2 w-full @error('password') border-red-500 @enderror"
                       type="password"
                       name="password"
                       id="password"
                       required
                >
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input type="checkbox" name="remember" id="remember"><label class="text-gray-500 text-sm ml-2">Mantener mi
                    sesión abierta</label>
            </div>

            <div class="mb-6">
                <input type="submit" name="" id="" value="Login"
                       class="bg-gray-500 hover:bg-gray-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5 mb-10"
                >
            </div>

            {{--            <div class="flex items-center">--}}
            {{--                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="1rem" height="1rem">--}}
            {{--                    <path--}}
            {{--                        d="M17.17,24a1,1,0,0,1-.71-.29L8.29,15.54a5,5,0,0,1,0-7.08L16.46.29a1,1,0,1,1,1.42,1.42L9.71,9.88a3,3,0,0,0,0,4.24l8.17,8.17a1,1,0,0,1,0,1.42A1,1,0,0,1,17.17,24Z"/>--}}
            {{--                </svg>--}}
            {{--                <a href="/" class="text-gray-700 ml-2">--}}
            {{--                    Back to Home--}}
            {{--                </a>--}}
            {{--            </div>--}}
        </form>
    </div>
</div>

<x-footer/>
