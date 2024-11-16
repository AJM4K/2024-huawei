<?php

namespace App\Livewire;

use App\Models\MA;
use App\Models\MAItem;
use Livewire\Component;

class MADetail extends Component
{
    public $ma_code;
    public $ma;
    public $items;
    public function mount ($ma_code){
        $this->ma_code = $ma_code;
        $this->ma = MA::where('ma_code', '=', $ma_code)->first();
        $this->items = MAItem::where('ma_code', '=', $ma_code)->get();

    }
    public function render()
    {
        return view('livewire.m-a-detail');
    }
}
