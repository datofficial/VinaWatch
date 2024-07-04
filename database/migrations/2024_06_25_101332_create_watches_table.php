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
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->string('NameWatch');
            $table->text('ShortDescriptionWatch');
            $table->text('DescriptionWatch');
            // decimal cho giá trị chính xác hơn double
            $table->decimal('PriceWatch', 10, 2); // Sử dụng kiểu dữ liệu decimal cho giá trị tiền tệ
            $table->boolean('IsShow')->default(true);
            $table->string('ImageWatch');
            $table->unsignedBigInteger('IDManufacturer');
            $table->unsignedBigInteger('IDCategory');
            $table->timestamp('CreatedDate')->useCurrent();
            $table->unsignedBigInteger('CreatedBy');
            $table->timestamp('UpdatedDate')->useCurrent();
            $table->unsignedBigInteger('UpdatedBy');

            // Thiết lập khóa ngoại
            $table->foreign('IDManufacturer')->references('id')->on('manufacturers')->onDelete('cascade');
            $table->foreign('IDCategory')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watches');
    }
};
