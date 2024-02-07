<div class="h-screen">
    <div class="h-full">
        <!-- Left column container with background-->
        <div class="g-6 flex h-full flex-wrap items-center justify-center">
            <div
                class="shrink-1 mb-12 grow-0 basis-auto hidden md:mb-0 md:w-9/12 md:shrink-0 lg:block lg:w-6/12 xl:w-6/12">
                <img src="{{ asset('assets/image/login-image-2.jpg') }}" class="w-full" alt="Sample image" />
            </div>

            <!-- Right column container -->
            <div class="mb-12 p-4 mr-4 flex flex-col gap-2 border-black md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                <div class="text-center text-xl">
                    <p class="text-[#1D3244]">Welcome to, <span class="text-[#1B8ACB] font-bold">ChatMingle</span></p>
                </div>
                <form wire:submit="login" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input wire:model="username"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="Username">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input wire:model="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" placeholder="******************">
                        {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
                    </div>
                    <div class="flex flex-col items-start gap-4">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Sign In
                        </button>
                        <p class="inline-block align-baseline text-sm font-medium">
                            Didn't have account ? <a class="font-bold text-blue-500 hover:text-blue-800"
                                href="/register" wire:navigate>Sign Up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
