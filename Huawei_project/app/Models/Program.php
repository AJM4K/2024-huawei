<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    public function projects()
    {
        return $this->hasMany(Project::class, 'program_code', 'program_code');
    }
}
