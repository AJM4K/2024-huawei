<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vouchers')->insert([
            ['voucher_id' => 'V1001', 'smr_number' => 1, 'voucher_image' => 'voucher1.png'],
            ['voucher_id' => 'V1002', 'smr_number' => 2, 'voucher_image' => 'voucher2.png'],
        ]);
    }
}
