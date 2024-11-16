<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_code', 'program_code');
    }
    public function mas()
    {
        return $this->hasMany(MA::class, 'po_code', 'po_code');
    }
    public function items()
{
    return $this->hasMany(MAItem::class, 'po_code', 'po_code');
}

public function smrs()
{
    return $this->hasMany(SMR::class, 'po_code', 'po_code');
}
    
}
