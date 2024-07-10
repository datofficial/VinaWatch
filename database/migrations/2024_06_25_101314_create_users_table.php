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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('PhoneUser', 15)->unique();
            $table->string('email')->unique();
            $table->date('DOBUser');
            $table->string('RoleUser');
            $table->unsignedBigInteger('IDCity');
            $table->unsignedBigInteger('IDDistrict');
            $table->unsignedBigInteger('IDWard');
            $table->string('Address'); // Địa chỉ cụ thể

            $table->foreign('IDCity')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('IDDistrict')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('IDWard')->references('id')->on('wards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
