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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('NameCategory');
            $table->text('DescriptionCategory');
            $table->unsignedBigInteger('ParentID');
            $table->timestamp('CreatedDate')->useCurrent();
            $table->unsignedBigInteger('CreatedBy');
            $table->timestamp('UpdatedDate')->useCurrent();
            $table->unsignedBigInteger('UpdatedBy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};