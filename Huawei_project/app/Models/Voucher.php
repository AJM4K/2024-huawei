<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['voucher_id', 'smr_number', 'voucher_image'];

    public function subMaterialRequest()
    {
        return $this->belongsTo(SubMaterialRequest::class, 'smr_number', 'smr_number');
    }
}
