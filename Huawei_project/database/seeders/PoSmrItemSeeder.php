<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoSmrItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('po_smr_item')->insert([
            ['po_number' => 'PO1001', 'item_number' => 'I1001', 'smr_number' => 'SMR1001',  'quantity_requested' => 25],
            ['po_number' => 'PO1002', 'item_number' => 'I1002', 'smr_number' => 'SMR1002',  'quantity_requested' => 30],
        ]);
    }
}
