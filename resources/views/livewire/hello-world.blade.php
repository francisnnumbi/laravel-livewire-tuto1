<div class="p-16 flex justify-center  bg-gray-400 gap-6 items-center">
    <div class="justify-center  items-center">
   <h2>Hello World</h2>
   <h2>You have counted {{$count}} times</h2>
        <div class="flex">
            <livewire:click-button :emit-signature="'decrement'" :button-color="'red'" :button-text="'-'" wire:key="E1" />
            <livewire:click-button :emit-signature="'increment'" :button-color="'green'" :button-text="'+'"  wire:key="E2"/>

        </div>

    </div>
</div>
