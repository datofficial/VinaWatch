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
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->id();
            $table->text('DescriptionDetailOrder');
            $table->integer('AmountOfWatch'); 
            $table->unsignedBigInteger('IDOrder');
            $table->unsignedBigInteger('IDDetailWatch');

            // Thiết lập khóa ngoại
            $table->foreign('IDOrder')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('IDDetailWatch')->references('id')->on('detail_watches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_orders');
    }
};
