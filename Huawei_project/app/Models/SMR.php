<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SMR extends Model
{
    //

    public function project()
    {
        return $this->belongsTo(Project::class, 'po_code', 'po_code');
    }
    public function items()
    {
        return $this->hasMany(SMRItem::class, 'smr_code', 'smr_code');
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'smr_code', 'smr_code');
    }

    public function sites()
    {
        return $this->hasMany(SMRSite::class, 'smr_code', 'smr_code');
    }
}
