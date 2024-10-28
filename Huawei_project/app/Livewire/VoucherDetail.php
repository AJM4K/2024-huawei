<?php

namespace App\Livewire;

use App\Models\Voucher;
use Livewire\Component;

class VoucherDetail extends Component
{
    public $voucher;

    public function mount($voucher_id)
    {
        $this->voucher = Voucher::where('voucher_id', '=', $voucher_id)->first();
    }

    public function render()
    {
        return view('livewire.voucher-detail');
    }
}
