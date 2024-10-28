<?php

namespace App\Livewire;

use App\Models\ProjectOperation;
use Livewire\Component;

class PoList extends Component
{
    public $searchQuery = '';
    public $pos;
    public function render()
    {
        // $pos = ProjectOperation::all(); // Retrieve all existing POs
        $this->pos = ProjectOperation::where('po_number', 'like', '%' . $this->searchQuery . '%')
            ->get();
        return view('livewire.po-list', ['pos' => $this->pos]);
    }
}
