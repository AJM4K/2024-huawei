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
        Schema::create('s_m_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('smr_code');
            $table->string('po_code');
            $table->string('warehouse');
            $table->string('warehouse_location');
            $table->string('sub_contract');
            $table->string('smr_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_m_r_s');
    }
};
