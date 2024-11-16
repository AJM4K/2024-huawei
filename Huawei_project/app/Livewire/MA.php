<?php

namespace App\Livewire;

use App\Models\MA as ModelsMA;
use Livewire\Component;

class MA extends Component
{
    public $mas ;
    public function mount ()
    {
        $this->mas = ModelsMA::all();
    }
    public function render()
    {
        return view('livewire.m-a');
    }
}
