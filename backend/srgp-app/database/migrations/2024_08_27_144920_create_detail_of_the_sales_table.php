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
        Schema::create('detail_of_the_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('total');
            $table->decimal('IVA');
            $table->unsignedBigInteger('sale_id');
 
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_of_the_sales');
    }
};
