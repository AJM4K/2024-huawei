<?php

namespace App\Livewire;

use App\Models\Voucher as ModelsVoucher;
use Livewire\Component;

class Voucher extends Component
{
    public $vouchers;
public function mount ()
    {
        $this->vouchers = ModelsVoucher::all();
    }    public function render()
    {
        return view('livewire.voucher');
    }
}
