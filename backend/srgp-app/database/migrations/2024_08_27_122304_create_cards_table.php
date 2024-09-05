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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->date('expiration_date');
            $table->string('CVV');
            $table->string('card_number', 16);
            $table->string('name_of_the_holder');
            $table->unsignedBigInteger('bank_id');
 
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->unsignedBigInteger('brand_id');
 
            $table->foreign('brand_id')->references('id')->on('international_brands');
            $table->unsignedBigInteger('card_type_id');
 
            $table->foreign('card_type_id')->references('id')->on('card_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
