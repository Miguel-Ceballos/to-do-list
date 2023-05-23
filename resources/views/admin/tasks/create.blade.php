<x-head/>

<div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
    <div class="container xl:max-w-4xl mx-auto px-4">
        <header class="text-center mx-auto mb-12 lg:px-20">
            <h2 class="text-2xl leading-normal mb-10 font-bold text-black">Create a task</h2>
            <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Save time managing advertising
                &amp; Content for your business.</p>
        </header>
        <form action="{{ route('create-task') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">
                    Description:
                </label>
                <input id="description" name="description" type="text" placeholder="Description"
                       class="border p-3 w-full rounded-lg
                                @error('description')
                                    border-red-500
                                @enderror"
                       value="{{ old('description') }}">
                @error('description')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="status" class="mb-2 block uppercase text-gray-500 font-bold">
                    Status:
                </label>
                <select id="status" name="status"
                        class="border-gray-100 focus:border-indigo-100 focus:ring-indigo-500 rounded-md shadow-sm p-3 w-full
                        @error('status')
                            border-red-500
                        @enderror"
                >

{{--                    <option id="todo" value="1">To do</option>--}}
{{--                    <option id="todo" value="2">In progress</option>--}}
{{--                    <option id="todo" value="3">Done</option>--}}
                </select>
                @error('status')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="comments" class="mb-2 block uppercase text-gray-500 font-bold">
                    Comments:
                </label>
                <input id="comments" name="comments" type="text" placeholder="Comments"
                       class="border p-3 w-full rounded-lg
                                @error('comments')
                                    border-red-500
                                @enderror"
                       value="{{ old('comments') }}">
                @error('comments')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="page" class="mb-2 block uppercase text-gray-500 font-bold">
                    Area:
                </label>
                <select id="page" name="page"
                        class="border-gray-100 focus:border-indigo-100 focus:ring-indigo-500 rounded-md shadow-sm p-3 w-full">
                    <option id="todo" value="1">Personal</option>
                    <option id="todo" value="2">Work</option>
                    <option id="todo" value="3">School</option>
                </select>
            </div>
            <input type="submit" name="" id="" value="Create"
                   class="bg-gray-500 hover:bg-gray-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5 mb-10"
            >

            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="1rem" height="1rem">
                    <path
                        d="M17.17,24a1,1,0,0,1-.71-.29L8.29,15.54a5,5,0,0,1,0-7.08L16.46.29a1,1,0,1,1,1.42,1.42L9.71,9.88a3,3,0,0,0,0,4.24l8.17,8.17a1,1,0,0,1,0,1.42A1,1,0,0,1,17.17,24Z"/>
                </svg>
                <a href="/" class="text-gray-700 ml-2">
                    Back to Home
                </a>
            </div>
        </form>
    </div>
</div>
<x-footer/>
