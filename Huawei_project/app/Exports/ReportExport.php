<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class ReportExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): view
    {
        $items = DB::table('items')->get();
        return view('export.report-item-page', compact('items'));
    }
}
