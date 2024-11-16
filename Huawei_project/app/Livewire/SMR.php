<?php

namespace App\Livewire;

use App\Models\SMR as ModelsSMR;
use Livewire\Component;

class SMR extends Component
{
    public $smrs;
    public function mount ()
    {
        $this->smrs = ModelsSMR::all();
    }
    public function render()
    {
        return view('livewire.s-m-r');
    }
}
