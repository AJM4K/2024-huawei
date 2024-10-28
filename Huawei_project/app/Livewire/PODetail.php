<?php

namespace App\Livewire;

use App\Models\ProjectOperation;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PODetail extends Component
{
    public $po_id;
    public $poDetails; // This will hold the fetched PO details
    public $poItems = [];

    public function mount($po_id){

        $this->po_id = $po_id;
        $this->fetchPODetails();
        $this->fetchPOItems(); 

    }

    public function fetchPODetails()
    {
        $this->poDetails = ProjectOperation::query()->where('po_number', $this->po_id)->first(); // Fetch PO details with items
    }

    public function fetchPOItems()
    {
        // Fetch the items related to the specified PO number
        $this->poItems = DB::table('po_in_item')
            ->where('po_number', $this->po_id)
            ->get();
    }
    public function render()
    {


        return view('livewire.p-o-detail',
        [
            'poDetails' => $this->poDetails, // Pass PO details to the view
            'poItems' => $this->poItems, // Pass PO items to the view
        ]);
    }
}
