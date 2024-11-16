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
        Schema::create('m_a_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->string('item_description');
            $table->integer('qty_in');
            $table->string('ma_code');
            $table->string('po_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_a_items');
    }
};
