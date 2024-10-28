<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubMaterialRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_material_requests')->insert([
            ['smr_number' => 'SMR1001', 'po_number' => 'PO1001', 'site_code' => 'SiteA', 'person_name' => 'John Doe', 'comments' => 'First request'],
            ['smr_number' => 'SMR1002', 'po_number' => 'PO1002', 'site_code' => 'SiteB', 'person_name' => 'Jane Smith', 'comments' => 'Second request'],
            ['smr_number' => 'SMR1003', 'po_number' => 'PO1003', 'site_code' => 'SiteC', 'person_name' => 'Alice Brown', 'comments' => 'Third request'],
        ]);
    }
}
