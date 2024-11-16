<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project as pr;

class ProjectDetail extends Component
{
    public $po_code;
    public $po;
    public $items;
    public function mount($po_code)
    {
        $this->po_code = $po_code;
        $this->po = pr::where('po_code', '=', $po_code)->first();
        $this->items = $this->po->items;

    }
    public function render()
    {
        return view('livewire.project-detail');
    }
}
