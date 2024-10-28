<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialInspection extends Model
{
    protected $fillable = ['ma_number', 'po_number'];

    public function projectOperation()
    {
        return $this->belongsTo(ProjectOperation::class, 'po_number', 'po_number');
    }
}
