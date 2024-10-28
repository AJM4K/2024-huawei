<?php

namespace App\Livewire;

use App\Imports\MaterialInspectionImport;
use App\Imports\SubMaterialRequestImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ImportFile extends Component
{
    use WithFileUploads;
    public $materialInspectionFile;
    public $subMaterialRequestFile;



    public function uploadFiles()
    {
        $this->validate([
            'materialInspectionFile' => 'nullable|mimes:xlsx,xls',
            'subMaterialRequestFile' => 'nullable|mimes:xlsx,xls',
        ]);

        if ($this->materialInspectionFile) {
            // $this->materialInspectionFile->store('materialInspectionFile', 'public');
            $import = new MaterialInspectionImport();
             Excel::import($import, $this->materialInspectionFile);
           dd($import->test);

        session()->flash('message', 'Material Inspection File uploaded successfully!');
        }

        if ($this->subMaterialRequestFile) {
            // $this->subMaterialRequestFile->store('subMaterialRequestFile', 'public');
            $import = new SubMaterialRequestImport();
            Excel::import($import, $this->subMaterialRequestFile);
         dd($import->smr_number);
            session()->flash('message', 'Sub Material Request File uploaded successfully!');

        }

        $this->materialInspectionFile = null;
        $this->subMaterialRequestFile = null;
        
    }
    public function render()
    {
        return view('livewire.import-file');
    }
}
