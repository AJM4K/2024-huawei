<?php

namespace App\Livewire;

use App\Models\MaterialInspection;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class MAList extends Component
{
    public $po_number;
    public $mas;
    public $searchQuery;

    public function mount(Request $request)
    {
        $this->po_number = request()->query('po_number');
        if (isset($this->po_number)) {
            $this->mas = MaterialInspection::where('po_number', '=', $this->po_number)->get();
        } else {
            $this->mas = MaterialInspection::all();
        }
        


    }
    public function render()
    {
        if (isset($this->po_number)) {
            $this->mas = MaterialInspection::where('po_number', '=', $this->po_number)->get();
        } else if (isset($this->searchQuery)) {
            $this->mas = MaterialInspection::where('ma_number', 'like', '%' . $this->searchQuery . '%')
                ->get();
        } else {
            $this->mas = MaterialInspection::all();
        }
        return view('livewire.m-a-list' , ['mas' => $this->mas]);
    }
}
