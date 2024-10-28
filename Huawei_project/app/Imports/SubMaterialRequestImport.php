<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class SubMaterialRequestImport implements ToCollection
{
    public $po_number;
    public $smr_number;
    public $firstOperation = true;
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        foreach ($collection->skip(1) as $row) {
            if ($this->firstOperation) {
                if (DB::table('project_operations')->where('po_number', '=', $row[4])->exists()) {
                    $this->po_number = $row[4];

                    DB::table('sub_material_requests')->insert([
                        'smr_number' => $row[5],
                        'po_number' => $row[4],
                        'site_code' => $row[7],
                        'person_name' => $row[6],
                    ]);
                    $this->smr_number = $row[5];

                    $this->firstOperation = false;
                } else {
                    break;
                }
            }
            if (!DB::table('items')->where('item_number', '=', $row[0])->exists()) {
                DB::table('items')->insert([
                    'item_number' => $row[0],
                    'description' => $row[1],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
            DB::table('po_smr_item')->insert([
                'po_number' => $row[4],
                'smr_number' => $row[5],
                'item_number' => $row[0],
                'quantity_requested' => $row[2],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
