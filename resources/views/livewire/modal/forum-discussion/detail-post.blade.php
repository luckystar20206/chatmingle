<div>
    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <div class="flex items-center gap-3">
            <img class="rounded-full w-16 h-16 lg:w-14 lg:h-14" src="{{ asset('assets/image/default-user.png') }}"
                alt="image body">
            <div class="flex flex-col items-center text-blue-500">
                <p class="font-bold text-center">{{ $post->users->username }}</p>
            </div>
        </div>
        <button type="button" wire:click="$dispatch('closeModal')"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>

    <div class="flex flex-col p-3 gap-2 text-slate-500">
        <h4 class="text-xl font-bold">{{ $post->title }}</h4>
        <p class="text-lg font-medium">
            {{ $post->body }}
        </p>
        <div class="flex justify-between items-center">
            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
            <div class="flex gap-2">
                <button type="button" wire:click="delete"
                    class="text-red-700 hover:text-white border border-red-700 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mt-2 mb-2">
                    Delete
                </button>
                <button type="button"
                    class="text-slate-700 hover:text-white border border-slate-700 hover:bg-slate-500 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mt-2 mb-2">
                    Edit
                </button>
            </div>
        </div>
    </div>
</div>
