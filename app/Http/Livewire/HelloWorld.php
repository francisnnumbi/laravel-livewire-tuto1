<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
    public $count = 0;
    public $increaseBtnColor = 'green';
    public $decreaseBtnColor = 'red';

    public $increaseBtnText = '+';
    public $decreaseBtnText = '-';

   protected $listeners =[
        'increment', 'decrement'
    ];

    public  function increment(){$this->count++;}
    public function decrement (){return $this->count--;}

    public function render()
    {
        return view('livewire.hello-world');
    }
}
