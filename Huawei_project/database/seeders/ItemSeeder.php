<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['item_number' => 'I1001', 'description' => 'Item 1'],
            ['item_number' => 'I1002', 'description' => 'Item 2'],
            ['item_number' => 'I1003', 'description' => 'Item 3'],
            ['item_number' => 'I1004', 'description' => 'Item 4'],
            ['item_number' => 'I1005', 'description' => 'Item 5'],
            ['item_number' => 'I1006', 'description' => 'Item 6'],
            ['item_number' => 'I1007', 'description' => 'Item 7'],
            ['item_number' => 'I1008', 'description' => 'Item 8'],
            ['item_number' => 'I1009', 'description' => 'Item 9'],
            ['item_number' => 'I1010', 'description' => 'Item 10'],
            ['item_number' => 'I1011', 'description' => 'Item 11'],
            ['item_number' => 'I1012', 'description' => 'Item 12']
        ]);
    }
}
