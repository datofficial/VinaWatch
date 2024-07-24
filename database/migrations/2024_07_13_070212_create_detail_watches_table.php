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
            $table->unsignedBigInteger('IDWatch');
            $table->unsignedBigInteger('IDMaterialStrap');
            $table->unsignedBigInteger('IDColor');

            // Thiết lập khóa ngoại
            $table->foreign('IDWatch')->references('id')->on('watches')->onDelete('cascade');
            $table->foreign('IDMaterialStrap')->references('id')->on('material_straps')->onDelete('cascade');
            $table->foreign('IDColor')->references('id')->on('colors')->onDelete('cascade');
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
