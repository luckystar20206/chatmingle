<div>
    <div class="grid grid-cols-12 p-4">
        {{-- Detail Post Content --}}
        <section class="flex flex-row-reverse items-center col-span-12 lg:col-span-7 gap-8 px-4">
            {{-- Content --}}
            <section class="border-b border-black border-opacity-25">
                <div class="flex items-center justify-between p-4 md:p-5 ">
                    <div class="flex items-center gap-3">
                        <img class="rounded-full w-16 h-16 lg:w-14 lg:h-14"
                            src="{{ asset('assets/image/default-user.png') }}" alt="image body">
                        <div class="flex flex-col items-center text-blue-500">
                            <p class="font-bold text-center">{{ $post->users->username }}</p>
                        </div>
                    </div>
                    @if ($post->user_id == auth()->user()->id)
                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                            class="rounded-full p-2 transition-colors ease-in-out hover:bg-blue-500">
                            <img src="{{ asset('assets/image/three-dots.svg') }}" class="w-6" alt="">
                        </button>
                        <div id="dropdownDots"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <span href="#" wire:click="delete"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer">Delete</span>
                                </li>
                        </div>
                    @endif

                </div>

                <div class="flex flex-col py-4 px-3 gap-2 text-slate-500 text-justify">
                    <h4 class="text-xl font-bold">{{ $post->title }}</h4>
                    <p class="text-lg font-medium">
                        {{ $post->body }}
                    </p>
                    <div class="flex gap-8 items-center">
                        <div class="flex items-center gap-2">
                            <p class="font-medium text-blue-500">Created : </p>
                            <p class="text-sm">
                                {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <p class="font-medium text-blue-500">Last Modified : </p>
                            <p class="text-sm">
                                {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Upvote and Downvote --}}
            <section>
                <h1>Upvote</h1>
            </section>
        </section>

        {{-- Side Menu --}}
        <section class="hidden lg:block col-span-5">
            <div class="flex flex-col gap-8 pt-8">
                <button type="button"
                    class="w-1/3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-4 me-2 mb-2 focus:outline-none">Default</button>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-2">
                        <p class="text-2xl font-bold">Title</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis magnam incidunt quam porro
                            reiciendis nulla id aliquam ut adipisci et? Non est magnam beatae ipsa facilis at hic cumque
                            numquam.</p>
                    </div>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-1/4  py-3 me-2 mb-2 focus:outline-none">Default</button>
                </div>
            </div>
        </section>
    </div>
</div>
