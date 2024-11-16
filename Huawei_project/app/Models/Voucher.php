<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    //

    public function items()
    {
        return $this->hasMany(VoucherItem::class, 'voucher_code', 'voucher_code');
    }
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_code', 'project_code');
    }
    public function smr()
    {
        return $this->belongsTo(SMR::class, 'smr_code', 'smr_code');
    }
}
