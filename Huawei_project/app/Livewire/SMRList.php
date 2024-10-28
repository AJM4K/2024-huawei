<?php

namespace App\Livewire;

use App\Models\SubMaterialRequest;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class SMRList extends Component
{
    public $po_number;
    public $smrs;
    public $searchQuery;

    public function mount(Request $request)
    {
        $this->po_number = request()->query('po_number');
        if (isset($this->po_number)) {
            $this->smrs = SubMaterialRequest::where('po_number', '=', $this->po_number)->get();
        } else {
            $this->smrs = SubMaterialRequest::all();
        }
    }

    public function render()
    {
        if (isset($this->po_number)) {
            $this->smrs = SubMaterialRequest::where('po_number', '=', $this->po_number)->get();
        } else if (isset($this->searchQuery)) {
            $this->smrs = SubMaterialRequest::where('smr_number', 'like', '%' . $this->searchQuery . '%')
                ->get();
        } else {
            $this->smrs = SubMaterialRequest::all();
        }
        return view('livewire.s-m-r-list', ['smrs' => $this->smrs]);
    }
}
