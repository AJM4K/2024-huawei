<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program as pr;

class Program extends Component
{
    public $programs;
    public function mount ()
    {
        $this->programs = pr::all();
    }
    public function render()
    {

        return view('livewire.program', [
            'programs' => $this->programs
        ]);
    }
}
