<div class="p-16 flex justify-center gap-6 items-center">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white" wire:click="increment" class="">+</button>
    <span class="text-3xl font-bold">{{ $count }}</span>
    <button class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white" wire:click="decrement" class="">-</button>
</div>
