<?php

namespace App\Livewire;

use App\Exports\ReportExport;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class ItemPage extends Component
{
    public $items;
    public $po_number;
    public $smr_number;
    public $ma_number;
    public $searchQuery ;

    public function export()
    {
       return Excel::download(new ReportExport, 'report.xlsx');
    }


    public function mount()
    {
        $this->items = DB::table('items')->get();
    }
    public function render()
    {
        $this->items = DB::table('items')
                         ->when($this->searchQuery, function ($query) {
                             return $query->where('item_number', 'like', '%' . $this->searchQuery . '%');
                         })->get();
        return view('livewire.item-page', ['items' => $this->items]);
    }
}
