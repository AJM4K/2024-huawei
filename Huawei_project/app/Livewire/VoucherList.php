<?php

namespace App\Livewire;

use App\Models\Voucher;
use Livewire\Component;

class VoucherList extends Component
{ 
    public $searchQuery;    
    public $vouchers;
    

    public function mount()
    {
        $this->vouchers = Voucher::all();
    }

    public function render()
    {
        if (isset($this->searchQuery)) {
            $this->vouchers = Voucher::where('voucher_id', 'like', '%' . $this->searchQuery . '%')
                ->get();    
        }
        return view('livewire.voucher-list');
    }
}
