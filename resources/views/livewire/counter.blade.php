<div class="w-full mt-4 p-4">
    <div class="6xl text-center">
        <h1 class="font-bold">This is Counter Section</h1>
    </div>
    <div class="flex p-4 justify-center items-center gap-x-2">
        <button wire:click="increment" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            + </button>
        <h1 class="text-3xl">{{ $count }}</h1>
        <button wire:click="decrement" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            - </button>
    </div>
</div>
