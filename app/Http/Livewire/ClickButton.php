<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClickButton extends Component
{

    public $buttonColor= 'white';
    public $buttonText='';
    public $emitSignature = '';
    public function render()
    {
        return view('livewire.click-button');
    }

    public function clickMe(){
        $this->emit($this->emitSignature);
    }

}
