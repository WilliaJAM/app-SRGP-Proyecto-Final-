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
        Schema::create('user_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('image')->nullable();
            $table->char('cedula', 10);
            $table->date('birthdate');
            $table->string('password');
            $table->string('gender');
            $table->date('registration_date');
            $table->date('last_date_of_entry');
            $table->boolean('account_status');
            $table->string('email')->unique();
            $table->string('user_id')->unique();;
            $table->unsignedBigInteger('rol_id');
 
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->unsignedBigInteger('address_id');
 
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->unsignedBigInteger('phone_id');
 
            $table->foreign('phone_id')->references('id')->on('phones');
            $table->unsignedBigInteger('card_id');
 
            $table->foreign('card_id')->references('id')->on('cards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tables');
    }
};
