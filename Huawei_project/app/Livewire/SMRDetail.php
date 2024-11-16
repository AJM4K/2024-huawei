<?php

namespace App\Livewire;

use App\Models\SMR;
use App\Models\SMRItem;
use Livewire\Component;

class SMRDetail extends Component
{
    public $smr_code;
    public $smr;
    public $items;
    public $vouchers = [];
    public function mount ($smr_code){
        $this->smr_code = $smr_code;
        $this->smr = SMR::where('smr_code', '=', $smr_code)->first();
        $this->items = SMRItem::where('smr_code', '=', $smr_code)->get();
        $this->vouchers = $this->smr->voucher;
        

    }
    public function render()
    {
        return view('livewire.s-m-r-detail');
    }
}
