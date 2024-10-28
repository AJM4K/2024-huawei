<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialInspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('material_inspections')->insert([
            ['ma_number' => 'MA1001', 'po_number' => 'PO1001'],
            ['ma_number' => 'MA1002', 'po_number' => 'PO1002'],
            ['ma_number' => 'MA1003', 'po_number' => 'PO1003'],
            ['ma_number' => 'MA1004', 'po_number' => 'PO1004'],
            ['ma_number' => 'MA1005', 'po_number' => 'PO1005'],
            ['ma_number' => 'MA1006', 'po_number' => 'PO1006'],
            ['ma_number' => 'MA1007', 'po_number' => 'PO1007'],
            ['ma_number' => 'MA1008', 'po_number' => 'PO1008'],
            ['ma_number' => 'MA1009', 'po_number' => 'PO1009'],
            ['ma_number' => 'MA1010', 'po_number' => 'PO1010'],
        ]);
    }
}
