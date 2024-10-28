<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_operations')->insert([
            ['po_number' => 'PO1001'],
            ['po_number' => 'PO1002'],
            ['po_number' => 'PO1003'],
            ['po_number' => 'PO1004'],
            ['po_number' => 'PO1005'],
            ['po_number' => 'PO1006'],
            ['po_number' => 'PO1007'],
            ['po_number' => 'PO1008'],
            ['po_number' => 'PO1009'],
            ['po_number' => 'PO1010'],
        ]);
    }
}
