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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street_number', 5);
            $table->string('street_name', 100);
            $table->string('street_direction', 75)->nullable();
            $table->string('street_type', 75)->nullable();
            $table->string('unit')->nullable();
            $table->string('postal_code', 8);
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('provinces')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
