<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\Project;
use App\Models\SMR;
use App\Models\SMRSite;
use App\Models\MA;
use App\Models\Voucher;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Program::create(['program_code' => 'PRG001', 'name' => 'Program 1', 'customer' => 'Customer 1']);
        Program::create(['program_code' => 'PRG002', 'name' => 'Program 2', 'customer' => 'Customer 2']);
        Program::create(['program_code' => 'PRG003', 'name' => 'Program 3', 'customer' => 'Customer 3']);
        Program::create(['program_code' => 'PRG004', 'name' => 'Program 4', 'customer' => 'Customer 4']);
        Program::create(['program_code' => 'PRG005', 'name' => 'Program 5', 'customer' => 'Customer 5']);

        Project::create(['po_code' => 'PO001', 'name' => 'Project 1', 'program_code' => 'PRG001']);
        Project::create(['po_code' => 'PO002', 'name' => 'Project 2', 'program_code' => 'PRG001']);
        Project::create(['po_code' => 'PO003', 'name' => 'Project 3', 'program_code' => 'PRG001']);
        Project::create(['po_code' => 'PO004', 'name' => 'Project 4', 'program_code' => 'PRG001']);
        Project::create(['po_code' => 'PO005', 'name' => 'Project 5', 'program_code' => 'PRG001']);
        Project::create(['po_code' => 'PO006', 'name' => 'Project 6', 'program_code' => 'PRG002']);
        Project::create(['po_code' => 'PO007', 'name' => 'Project 7', 'program_code' => 'PRG002']);
        Project::create(['po_code' => 'PO008', 'name' => 'Project 8', 'program_code' => 'PRG002']);
        Project::create(['po_code' => 'PO009', 'name' => 'Project 9', 'program_code' => 'PRG002']);
        Project::create(['po_code' => 'PO010', 'name' => 'Project 10', 'program_code' => 'PRG002']);

        MA::create(['ma_code' => 'MA001', 'po_code' => 'PO001', 'warehouse' => 'Warehouse 1']);
        MA::create(['ma_code' => 'MA002', 'po_code' => 'PO002', 'warehouse' => 'Warehouse 2']);
        MA::create(['ma_code' => 'MA003', 'po_code' => 'PO003', 'warehouse' => 'Warehouse 3']);
        MA::create(['ma_code' => 'MA004', 'po_code' => 'PO004', 'warehouse' => 'Warehouse 4']);
        MA::create(['ma_code' => 'MA005', 'po_code' => 'PO005', 'warehouse' => 'Warehouse 5']);

DB::table('m_a_items')->insert([
    ['ma_code' => 'MA001', 'item_code' => 'Item 1', 'item_description' => 'Item 1 description', 'qty_in' => 100, 'po_code' => 'PO001'],
    ['ma_code' => 'MA002', 'item_code' => 'Item 2', 'item_description' => 'Item 2 description', 'qty_in' => 200, 'po_code' => 'PO002'],
    ['ma_code' => 'MA003', 'item_code' => 'Item 3', 'item_description' => 'Item 3 description', 'qty_in' => 150, 'po_code' => 'PO003'],
    ['ma_code' => 'MA004', 'item_code' => 'Item 4', 'item_description' => 'Item 4 description', 'qty_in' => 250, 'po_code' => 'PO004'],
    ['ma_code' => 'MA005', 'item_code' => 'Item 5', 'item_description' => 'Item 5 description', 'qty_in' => 300, 'po_code' => 'PO005'],
]);
        SMR::create(['smr_code' => 'SMR001', 'po_code' => 'PO001', 'warehouse' => 'Warehouse 1', 'warehouse_location' => 'Location 1', 'sub_contract' => 'Sub Contract 1', 'smr_status' => 'Open']);
        SMR::create(['smr_code' => 'SMR002', 'po_code' => 'PO002', 'warehouse' => 'Warehouse 2', 'warehouse_location' => 'Location 2', 'sub_contract' => 'Sub Contract 2', 'smr_status' => 'Open']);
        SMR::create(['smr_code' => 'SMR003', 'po_code' => 'PO003', 'warehouse' => 'Warehouse 3', 'warehouse_location' => 'Location 3', 'sub_contract' => 'Sub Contract 3', 'smr_status' => 'Open']);
        SMR::create(['smr_code' => 'SMR004', 'po_code' => 'PO004', 'warehouse' => 'Warehouse 4', 'warehouse_location' => 'Location 4', 'sub_contract' => 'Sub Contract 4', 'smr_status' => 'Open']);
        SMR::create(['smr_code' => 'SMR005', 'po_code' => 'PO005', 'warehouse' => 'Warehouse 5', 'warehouse_location' => 'Location 5', 'sub_contract' => 'Sub Contract 5', 'smr_status' => 'Open']);

        DB::table('s_m_r_items')->insert([
            ['smr_code' => 'SMR001', 'item_code' => 'Item 1', 'item_description' => 'Item 1 description', 'requested_qty' => 100, 'po_code' => 'PO001'],
            ['smr_code' => 'SMR002', 'item_code' => 'Item 2', 'item_description' => 'Item 2 description', 'requested_qty' => 200, 'po_code' => 'PO002'],
            ['smr_code' => 'SMR003', 'item_code' => 'Item 3', 'item_description' => 'Item 3 description', 'requested_qty' => 150, 'po_code' => 'PO003'],
            ['smr_code' => 'SMR004', 'item_code' => 'Item 4', 'item_description' => 'Item 4 description', 'requested_qty' => 250, 'po_code' => 'PO004'],
            ['smr_code' => 'SMR005', 'item_code' => 'Item 5', 'item_description' => 'Item 5 description', 'requested_qty' => 300, 'po_code' => 'PO005'],
        ]);
    }
}
