<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SMRDetail extends Component
{
    public $po_number;
    public $smr_number;
    public $smr_items= []   ;
    public $vouchers = [];

    public function mount($po_id, $smr_id){

        $this->po_number = $po_id;
        $this->smr_number = $smr_id;
        $this->fetchSMRItems();
        $this->fetchVouchers();
    }

    public function fetchVouchers()
    {
        $this->vouchers = DB::table('vouchers')
            ->where('smr_number', 1)
            ->get();
    }

    public function fetchSMRItems()
    {
        $this->smr_items = DB::table('po_smr_item')
            ->where('po_number', $this->po_number)
            ->where('smr_number', $this->smr_number)
            ->get();
    }
    public function render()
    {
        return view('livewire.s-m-r-detail', [
            'po_number' => $this->po_number,
            'smr_number' => $this->smr_number,
            'smr_items' => $this->smr_items,
            'vouchers' => $this->vouchers

        ]);
    }
}
