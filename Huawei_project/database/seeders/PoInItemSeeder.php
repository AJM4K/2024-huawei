<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoInItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('po_in_item')->insert([
            ['po_number' => 'PO1001', 'item_number' => 'I1001', 'ma_number' => 'MA1001', 'quantity_in' => 100, 'delivered_quantity_out' => 50],
            ['po_number' => 'PO1002', 'item_number' => 'I1002', 'ma_number' => 'MA1002', 'quantity_in' => 150, 'delivered_quantity_out' => 75],
            ['po_number' => 'PO1003', 'item_number' => 'I1003', 'ma_number' => 'MA1003', 'quantity_in' => 200, 'delivered_quantity_out' => 100],
            ['po_number' => 'PO1004', 'item_number' => 'I1004', 'ma_number' => 'MA1004', 'quantity_in' => 250, 'delivered_quantity_out' => 125],
            ['po_number' => 'PO1005', 'item_number' => 'I1005', 'ma_number' => 'MA1005', 'quantity_in' => 300, 'delivered_quantity_out' => 150],
            ['po_number' => 'PO1006', 'item_number' => 'I1006', 'ma_number' => 'MA1006', 'quantity_in' => 350, 'delivered_quantity_out' => 175],
            ['po_number' => 'PO1007', 'item_number' => 'I1007', 'ma_number' => 'MA1007', 'quantity_in' => 400, 'delivered_quantity_out' => 200],
            ['po_number' => 'PO1001', 'item_number' => 'I1008', 'ma_number' => 'MA1008', 'quantity_in' => 450, 'delivered_quantity_out' => 225],
        ]);
    }
}
