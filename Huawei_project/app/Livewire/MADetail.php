<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MADetail extends Component

{
    public $po_number ;
    public $ma_number;
    public $ma_items = [];

    public function mount($po_id, $ma_id){

        $this->po_number = $po_id;
        $this->ma_number = $ma_id;
        $this->fetchMAItems();
    }

    public function fetchMAItems()
    {
        $this->ma_items = DB::table('po_in_item')
            ->where('po_number', $this->po_number)
            ->where('ma_number', $this->ma_number)
            ->get();
    }
    public function render()
    {
        return view('livewire.m-a-detail' , [
            'po_number' => $this->po_number,
            'ma_number' => $this->ma_number,
            'ma_items' => $this->ma_items,
        
        ]);
    }
}
