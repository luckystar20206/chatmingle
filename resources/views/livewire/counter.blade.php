<div class="h-screen">
    <div class="h-full w-screen flex flex-col justify-center items-center gap-8">
        <h1 class="text-lg font-bold">{{ $count }}</h1>
        <div class="flex gap-4">
            <button wire:click="increment"
                class="w-[200px] h-[60px] rounded-full bg-green-500 cursor-pointer font-semibold text-2xl">+</button>
            <button wire:click="resetIncrement"
                class="w-[200px] h-[60px] rounded-full bg-yellow-500 cursor-pointer font-semibold text-xl">reset</button>
            <button wire:click="destroy"
                class="w-[200px] h-[60px] rounded-full bg-red-500 cursor-pointer font-semibold text-xl">Logout</button>
        </div>
    </div>
</div>
