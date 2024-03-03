<div style="background-image: url(../public/assets/image/background-register.png)">
    <div class="grid grid-cols-12 p-4">
        {{-- Detail Post Content --}}
        <section class="flex flex-row-reverse items-center col-span-12 gap-8 px-4">
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

                <div class="flex flex-col pb-3 px-3 gap-2 text-slate-500 text-justify">
                    <h4 class="text-xl font-bold">{{ $post->title }}</h4>

                    {{-- Categories --}}
                    <section class="flex items-center py-1 gap-2">
                        <button class="bg-slate-300 font-medium py-1 px-2 rounded-lg">Politics</button>
                        <button class="bg-slate-300 font-medium py-1 px-2 rounded-lg">Presidents</button>
                    </section>

                    <p class="text-lg font-medium">
                        {{ $post->body }}
                    </p>


                    <div class="flex pt-2 flex-row gap-1 items-center justify-between">
                        <div class="flex gap-4 font-bold">
                            <button class="flex items-center gap-1">
                                <i class="fa-regular fa-thumbs-up h-6"></i> Like
                            </button>

                            <button class="flex items-center gap-1">
                                <i class="fa-solid fa-reply h-6"></i> Reply
                            </button>
                        </div>

                        <div class="flex flex-col gap-1">
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
                </div>
            </section>

            {{-- Upvote and Downvote --}}
            <section class="flex flex-col items-center justify-center gap-3">
                <button>
                    <i class="fa-solid fa-arrow-up h-5 text-slate-500 hover:text-green-500 focus:text-green-600"></i>
                </button>
                <h1 class="text-3xl text-slate-600">2</h1>
                <button>
                    <i class="fa-solid fa-arrow-down h-5  text-slate-500 hover:text-red-500"></i>
                </button>
            </section>
        </section>
    </div>


    {{-- Reply Comments --}}
    <section class="flex lg:px-[5%] py-2 gap-4">
        {{-- Upvote and Downvote --}}
        <section class="flex flex-col items-center justify-center gap-3">
            <button>
                <i class="fa-solid fa-arrow-up h-5 text-slate-500 hover:text-green-500 focus:text-green-600"></i>
            </button>
            <h1 class="text-3xl text-slate-600">2</h1>
            <button>
                <i class="fa-solid fa-arrow-down h-5  text-slate-500 hover:text-red-500"></i>
            </button>
        </section>


        {{-- Content --}}
        <section>
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

            <div class="flex flex-col py-1 px-3 gap-2 text-slate-500 text-justify">
                <h4 class="text-xl font-bold">{{ $post->title }}</h4>

                <p class="text-lg font-medium">
                    {{ $post->body }}
                </p>


                <div class="flex pt-2 flex-row gap-1 items-center justify-between">
                    <div class="flex gap-4 font-bold">
                        <button class="flex items-center gap-1">
                            <i class="fa-regular fa-thumbs-up h-6"></i> Like
                        </button>

                        <button class="flex items-center gap-1">
                            <i class="fa-solid fa-reply h-6"></i> Reply
                        </button>
                    </div>

                    <div class="flex flex-col gap-1">
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
            </div>
        </section>

    </section>
</div>
