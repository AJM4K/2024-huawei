<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoOutItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('po_out_item')->insert([
            ['po_number' => 'PO1001', 'item_number' => 'I1001', 'smr_number' => 'SMR1001', 'voucher_number' => 'V1001', 'quantity_delivered' => 25],
            ['po_number' => 'PO1002', 'item_number' => 'I1002', 'smr_number' => 'SMR1002', 'voucher_number' => 'V1002', 'quantity_delivered' => 30],
        ]);
    }
}
