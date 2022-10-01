<div>
    <div class="flex flex-col items-center pt-2">
        <button
            class="py-2 px-4
             bg-red-500 hover:bg-red-600
             disabled:cursor-not-allowed
            disabled:bg-opacity-90
            rounded
             text-white" onclick="Livewire.emit('openModal', 'hello-world')"
           >Show Modal</button>
    </div>
    <div class="flex flex-col items-center">
        <div class="p-16 flex mx-auto justify-center gap-4 items-center">
            <input type="number" wire:model="number1" placeholder="Number 1">
            <select wire:model="action" class="w-24">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" wire:model="number2" placeholder="Number 2">
            <button
                class="py-2 px-4
             bg-indigo-500 hover:bg-indigo-600
             disabled:cursor-not-allowed
            disabled:bg-opacity-90
            rounded
             text-white"
                wire:click="calculate" {{ $disabled?' disabled':'' }}>=</button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
