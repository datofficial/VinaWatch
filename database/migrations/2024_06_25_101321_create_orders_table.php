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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->datetime('DateOrder');
            $table->string('NameCustomer');
            $table->string('PhoneCustomer', 10); 
            $table->string('StatusOrder');
            $table->decimal('TotalPrice', 10, 2); // Sử dụng kiểu dữ liệu decimal cho giá trị số chính xác nhất
            $table->string('NumberTracking')->unique();
            $table->unsignedBigInteger('IDPaymentMethod');
            $table->unsignedBigInteger('IDCity');
            $table->unsignedBigInteger('IDDistrict');
            $table->unsignedBigInteger('IDWard');
            $table->unsignedBigInteger('IDUser');

            // Thiết lập khóa ngoại
            $table->foreign('IDPaymentMethod')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('IDCity')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('IDDistrict')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('IDWard')->references('id')->on('wards')->onDelete('cascade');
            $table->foreign('IDUser')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
