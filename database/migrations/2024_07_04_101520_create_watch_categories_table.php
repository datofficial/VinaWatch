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
        Schema::create('watch_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IDWatch');
            $table->unsignedBigInteger('IDCategory');
            
            // Foreign key constraints
            $table->foreign('watch_id')->references('id')->on('watches')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
            // Unique constraint to prevent duplicate entries
            $table->unique(['watch_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watch_categories');
    }
};
