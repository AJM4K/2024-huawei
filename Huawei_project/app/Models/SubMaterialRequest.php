<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMaterialRequest extends Model
{
    protected $fillable = ['smr_number', 'po_number', 'site_code', 'person_name', 'comments'];

    public function projectOperation()
    {
        return $this->belongsTo(ProjectOperation::class, 'po_number', 'po_number');
    }

    public function items(){
        return $this->belongsToMany(Item::class, 'po_smr_item', 'po_number', 'item_number')
                    ->withPivot('smr_number', 'quantity_requested')
                    ->as('smr_item')
                    ->withTimestamps();
    }

    public function vouchers()
    {
        return $this->hasMany(Voucher::class, 'smr_number');
    }
}
