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
        Schema::create('detail_watches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IDEngine')->constrained('engines');
            $table->foreignId('IDMaterialGlass')->constrained('material_glasses');
            $table->foreignId('IDSizeGlass')->constrained('size_glasses');
            $table->foreignId('IDAvoidWater')->constrained('avoid_waters');
            $table->foreignId('IDMaterialStrap')->constrained('material_straps');
            $table->foreignId('IDSizeStrap')->constrained('size_straps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_watches');
    }
};
