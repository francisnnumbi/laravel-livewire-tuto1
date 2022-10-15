<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClickButton extends Component
{

    public $buttonColor= 'blue';
    public $buttonText='';
    public $emitSignature = '';
    public function render()
    {
        return view('livewire.click-button');
    }

    public function clickMe(){
        $this->emitUp($this->emitSignature);
    }

}
