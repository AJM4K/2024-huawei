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
        Schema::create('s_m_r_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->string('item_description');
            $table->integer('requested_qty');
            $table->string('smr_code');
            $table->string('po_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_m_r_items');
    }
};
