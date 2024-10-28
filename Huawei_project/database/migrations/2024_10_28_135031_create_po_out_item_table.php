<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('po_out_item', function (Blueprint $table) {
            $table->id();
            $table->string('po_number');
            $table->string('item_number');
            $table->string('smr_number');
            $table->string('voucher_number');
            $table->integer('quantity_delivered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('po_out_item');
    }
};