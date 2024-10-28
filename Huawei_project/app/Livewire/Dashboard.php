<?php

namespace App\Livewire;

use App\Models\MaterialInspection;
use App\Models\ProjectOperation;
use App\Models\SubMaterialRequest;
use App\Models\Voucher;
use Livewire\Component;

class Dashboard extends Component
{
    public $po_count;
    public $ma_count;
    public $smr_count;
    public $voucher_count;
    
    public function mount()
    {
        $this->po_count = ProjectOperation::count();
        $this->ma_count = MaterialInspection::count();
        $this->smr_count = SubMaterialRequest::count();
        $this->voucher_count = Voucher::count();
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
