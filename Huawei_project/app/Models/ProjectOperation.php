<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectOperation extends Model
{
    protected $fillable = ['po_number'];

    public function materialInspections()
    {
        return $this->hasMany(MaterialInspection::class, 'po_number', 'po_number');
    }

    public function subMaterialRequests()
    {
        return $this->hasMany(SubMaterialRequest::class, 'po_number', 'po_number');
    }

    // Relationship for items received (PO In Item)
    public function itemsReceived()
    {
        return $this->belongsToMany(Item::class, 'po_in_item', 'po_number', 'item_number')
                    ->withPivot('ma_number', 'quantity_in', 'delivered_quantity_out')
                    ->as('po_in')
                    ->withTimestamps();
    }

    // Relationship for items delivered (PO Out Item)
    public function itemsDelivered()
    {
        return $this->belongsToMany(Item::class, 'po_out_item', 'po_number', 'item_number')
                    ->withPivot('smr_number', 'voucher_number', 'quantity_delivered')
                    ->as('po_out')
                    ->withTimestamps();
    }
}
