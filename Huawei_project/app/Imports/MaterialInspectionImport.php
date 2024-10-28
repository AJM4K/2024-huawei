<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class MaterialInspectionImport implements ToCollection
{
    public $test;
    public $addEssetntial = true;
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection->skip(1) as $row) {
            if ($this->addEssetntial) {

                if (!DB::table('project_operations')->where('po_number', '=', $row[4])->exists()) {
                    DB::table('project_operations')->insert([
                        'po_number' => $row[4],
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }

                if (!DB::table('material_inspections')->where('ma_number', '=', $row[5])->exists()) {
                    DB::table('material_inspections')->insert([
                        'ma_number' => $row[5],
                        'po_number' => $row[4],
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }

                $this->addEssetntial = false;
            }

            DB::table('po_in_item')->insert([
                'po_number' => $row[4],
                'item_number' => $row[0],
                'ma_number' => $row[5],
                'quantity_in' => $row[2],
                'delivered_quantity_out' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('items')->insert([
                'item_number' => $row[0],
                'description' => $row[1],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        return [
            'test2' => 'test2'
        ];
    }
}
