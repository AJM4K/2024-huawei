<?php

namespace App\Livewire;

use App\Models\MA;
use App\Models\Project;
use App\Models\SMR;
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
        $this->po_count = Project::count();
        $this->ma_count = MA::count();
        $this->smr_count = SMR::count();
        $this->voucher_count = Voucher::count();
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
