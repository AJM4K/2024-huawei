<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MA extends Model
{
    //
    public function project()
    {
        return $this->belongsTo(Project::class, 'po_code', 'po_code');
    }

    
    public function items()
    {
        return $this->hasMany(MAItem::class, 'ma_code', 'ma_code');
    }
    
    
}
