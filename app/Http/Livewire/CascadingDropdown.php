<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $selectedContinent;

    public $countries = [];
    public $selectedCountry;


    public function mount()
    {
        $this->loadContinents();
    }
    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function loadContinents()
    {
        $this->continents = Continent::all();
    }

    public function changeContinent()
    {
        if ($this->selectedContinent !== '-1') {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }
}
