<div x-data>
    <button class="my-1 mx-1 py-2 px-4
             bg-{{$buttonColor}}-500 hover:bg-{{$buttonColor}}-600
             disabled:cursor-not-allowed
            disabled:bg-opacity-90
            rounded
             text-white" wire:click="clickMe">{{$buttonText}}</button>
</div>
