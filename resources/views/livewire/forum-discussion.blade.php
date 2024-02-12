<div class="min-h-screen">
    {{-- Discussion Header Section --}}
    <section class="h-full p-8 flex justify-center">
        <div class="block w-1/2 p-4 bg-white border border-gray-200 rounded-2xl shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
            <div class="flex items-center">
                <div class="w-1/2 flex justify-start">
                    <p class="font-['Poppins'] font-semibold  text-sm lg:text-xl">Forum Discussion</p>
                </div>
                <div class="w-full flex justify-end">
                    <a href="#_" class="relative inline-block  text-sm lg:text-lg group"
                        data-modal-target="crud-modal" data-modal-toggle="crud-modal">
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


    {{-- Discussion Content Section --}}
    <section>
        {{-- Discussion Header --}}
        <div class="block mx-auto w-2/3 p-4 rounded-2xl bg-blue-500 border border-gray-200">
            <div class="flex items-center justify-between px-2">
                <p class="text-white font-semibold text-sm lg:text-xl">Topic</p>
                <div class="flex gap-6 text-white font-semibold text-sm lg:text-xl">
                    <p>Replies</p>
                    <p>View</p>
                    <p>Likes</p>
                </div>
            </div>
        </div>

        {{-- Discussion Post Likes, Comment and Views --}}
        <div
            class="block mx-auto w-2/3 p-6 mt-6 rounded-2xl bg-blue-100 bg-opacity-20 border border-gray-200 shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
            <div class="flex gap-6">
                <div class="flex items-center">
                    <img class="rounded-full w-16 h-16 lg:w-32 lg:h-32"
                        src="{{ asset('assets/image/default-user.png') }}" alt="image description">
                </div>
                <div class="flex flex-col justify-center gap-2">
                    <p class="text-lg font-medium text-blue-500">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit.
                    </p>
                    <div class="flex gap-3 text-blue-500">
                        <p class="font-medium">username.</p>
                        <p class="text-slate-500">post time.</p>
                    </div>
                </div>
                <div class="flex items-center ml-auto gap-7 text-blue-500">
                    <div class="flex flex-col text-sm lg:text-lg">
                        <p class="font-medium text-center">10</p>
                        <p class="text-blue-300">Replies</p>
                    </div>
                    <div class="flex flex-col text-sm lg:text-lg">
                        <p class="font-medium text-center">10</p>
                        <p class="text-blue-300">Views</p>
                    </div>
                    <div class="flex flex-col text-sm lg:text-lg">
                        <p class="font-medium text-center">10</p>
                        <p class="text-blue-300">Likes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Discussion Add Modal Section --}}
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create Post
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Description</label>
                            <textarea id="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write product description here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new post
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
