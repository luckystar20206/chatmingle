<div class="min-h-screen pb-8">
    {{-- Discussion Header Section --}}
    <section class="h-full p-8 flex justify-center">
        <div class="block w-1/2 p-4 bg-white border border-gray-200 rounded-2xl shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
            <div class="flex flex-col items-center sm:flex-row gap-4 ">
                <div class="w-1/2 flex justify-start">
                    <p class="font-['Poppins'] font-semibold  text-sm lg:text-xl text-center lg:text-start">Forum
                        Discussion</p>
                </div>
                <div class="w-full flex justify-center sm:justify-end">
                    <a href="#_" class="relative inline-block  text-sm lg:text-lg group"
                        wire:click="$dispatch('openModal', { component: 'modal.forum-discussion.create-post' })">
                        <span
                            class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-blue-500 rounded-lg group-hover:text-white">
                            <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-blue-100"></span>
                            <span
                                class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-blue-500 group-hover:-rotate-180 ease"></span>
                            <span class="relative">Add Post</span>
                        </span>
                        <span
                            class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-blue-500 rounded-lg group-hover:mb-0 group-hover:mr-0"
                            data-rounded="rounded-lg"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Discussion Header --}}
    <div class="block mx-auto w-2/3 mb-8 p-4 rounded-2xl bg-blue-500 border border-gray-200">
        <div class="flex items-center justify-between px-2">
            <p class="text-white font-semibold text-sm lg:text-xl">Topic</p>
            <div class="flex gap-6 text-white font-semibold text-sm lg:text-xl">
                <p>Replies</p>
                <p>View</p>
                <p>Likes</p>
            </div>
        </div>
    </div>

    @forelse ($posts as $post)
        {{-- Discussion Content Section --}}
        <section>
            {{-- Discussion Post Likes, Comment and Views --}}
            <div
                class="block mx-auto w-2/3 p-6 mt-6 rounded-2xl bg-blue-100 bg-opacity-20 border border-gray-200 shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
                <div class="flex flex-col items-center justify-center lg:flex-row gap-3">
                    <div class="flex items-center ">
                        <img class="rounded-full w-16 h-16 lg:w-32 lg:h-32"
                            src="{{ asset('assets/image/default-user.png') }}" alt="image body">
                    </div>
                    <div class="flex flex-col items-center lg:items-start gap-3 lg:gap-1">
                        <p class="relative bottom-0 lg:top-3 text-xl lg:text-lg font-bold text-blue-500">
                            {{ $post->title }}
                        </p>
                        <div class="flex flex-col lg:flex-row gap-8 items-center  text-blue-500">
                            <p class="font-medium">{{ $post->users->username }}</p>
                            <div class="flex justify-center items-center gap-3 lg:gap-2 ">
                                <small
                                    class="font-light text-slate-500">{{ $post->created_at->diffForHumans() }}</small>
                                <button type="button"
                                    wire:click="$dispatch('openModal', { component: 'modal.forum-discussion.detail-post', arguments: {post: {{ $post->id }} }})"
                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mt-2 mb-2">Detail
                                    Post</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center lg:ml-auto gap-7 text-blue-500">
                        <div class="flex flex-col text-lg">
                            <p class="font-medium text-center">10</p>
                            <p class="text-blue-300">Replies</p>
                        </div>
                        <div class="flex flex-col text-lg">
                            <p class="font-medium text-center">10</p>
                            <p class="text-blue-300">Views</p>
                        </div>
                        <div class="flex flex-col text-lg">
                            <p class="font-medium text-center">10</p>
                            <p class="text-blue-300">Likes</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @empty
        <x-no-Post />
    @endforelse


</div>
