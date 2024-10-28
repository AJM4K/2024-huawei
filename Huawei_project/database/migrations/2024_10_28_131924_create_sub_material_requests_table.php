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
        Schema::create('sub_material_requests', function (Blueprint $table) {
            $table->id();
            $table->string('smr_number');
            $table->string('po_number'); // Foreign key to project_operations
            $table->string('site_code');
            $table->string('person_name');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_material_requests');
    }
};
