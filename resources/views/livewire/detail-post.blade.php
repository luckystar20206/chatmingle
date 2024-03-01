<div class="p-4">
    <div class="flex items-center justify-between p-4 md:p-5 ">
        <div class="flex items-center gap-3">
            <img class="rounded-full w-16 h-16 lg:w-14 lg:h-14" src="{{ asset('assets/image/default-user.png') }}"
                alt="image body">
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
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
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
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <p class="font-medium text-blue-500">Created</p>
                <p class="text-sm">
                    {{ $post->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
</div>
