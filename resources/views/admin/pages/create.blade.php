<x-head/>

<div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
    <div class="container xl:max-w-4xl mx-auto px-4">
        <header class="text-center mx-auto mb-12 lg:px-20">
            <h2 class="text-2xl leading-normal mb-10 font-bold text-black">Create a Page</h2>
        </header>
        <form action="{{ route('create.page') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="page" class="mb-2 block uppercase text-gray-500 font-bold">
                    Page:
                </label>
                <input id="page" name="page" type="text" placeholder="Title"
                       class="border p-3 w-full rounded-lg
                                @error('page')
                                    border-red-500
                                @enderror"
                       value="{{ old('page') }}">
                @error('page')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" name="" id="" value="Create"
                   class="bg-gray-500 hover:bg-gray-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5 mb-10"
            >

            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="1rem" height="1rem">
                    <path
                        d="M17.17,24a1,1,0,0,1-.71-.29L8.29,15.54a5,5,0,0,1,0-7.08L16.46.29a1,1,0,1,1,1.42,1.42L9.71,9.88a3,3,0,0,0,0,4.24l8.17,8.17a1,1,0,0,1,0,1.42A1,1,0,0,1,17.17,24Z"/>
                </svg>
                <a href="{{ route('pages.index', auth()->user()->username) }}" class="text-gray-700 ml-2">
                    Back to Home
                </a>
            </div>
        </form>
    </div>
</div>
<x-footer/>
