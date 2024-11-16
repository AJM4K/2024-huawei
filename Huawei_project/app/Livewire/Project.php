<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project as pr;
use App\Models\Program as pg;

class Project extends Component
{
    public $projects;
    public $program_name;
    public $program_code;
    public function mount($program_id)
    {
        $this->program_name = pg::find($program_id)->name;
        $this->program_code = pg::find($program_id)->program_code;
        $this->projects = pr::where('program_code', '=', $this->program_code)->get();
    }
    public function render()
    {
        return view('livewire.project');
    }
}
