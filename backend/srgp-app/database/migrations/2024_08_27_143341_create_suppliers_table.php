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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_name');
            $table->string('email');
            $table->unsignedBigInteger('supplier_product_id');
 
            $table->foreign('supplier_product_id')->references('id')->on('supplier_products');
            $table->unsignedBigInteger('address_id');
 
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->unsignedBigInteger('phone_id');
 
            $table->foreign('phone_id')->references('id')->on('phones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
