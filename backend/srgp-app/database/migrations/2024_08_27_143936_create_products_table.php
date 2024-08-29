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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->decimal('price');
            $table->string('image');
            $table->text('description');
            $table->string('dimensions');
            $table->boolean('status');
            $table->string('id_product');
            $table->unsignedBigInteger('category_id');
 
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('inventory_id');
 
            $table->foreign('inventory_id')->references('id')->on('inventories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
