<div class="h-screen">
    <div class="h-full">
        <div class="g-6 flex flex-col h-full w-screen items-center justify-center">
            <div class="h-full w-full">
                <div class="h-full w-full bg-cover bg-no-repeat"
                    style="background-image: url('{{ asset('assets/image/background-register.png') }}')">
                </div>
            </div>
            <div
                class="absolute flex flex-col items-start gap-10 h-auto bg-white shadow-xl rounded px-10 pt-6 pb-8 mb-4 md:w-8/12 lg:w-5/12 xl:w-5/12">
                <div>
                    <p class="text-2xl font-bold">Create Account</p>
                    <p class="text-base">Create your account to get platform access</p>
                </div>

                <form wire:submit="register" class="w-full">
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            wire:model="username" id="username" type="text" placeholder="Username">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            wire:model="email" id="email" type="email" placeholder="Email">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            wire:model="password" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                            Confirm password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            wire:model="password_confirmation" id="password_confirmation" type="password"
                            placeholder="Confirm password">
                    </div>
                    <div class="flex flex-col items-start gap-4">
                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Sign Up
                        </button>
                        <p class="inline-block align-baseline text-sm font-medium">
                            Already have account ? <a class="font-bold text-blue-500 hover:text-blue-800" href="/login"
                                wire:navigate>Sign In</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
