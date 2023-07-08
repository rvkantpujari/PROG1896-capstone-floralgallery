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
            $table->string('product_name', 100);
            $table->text('product_desc', );
            $table->string('product_price');
            $table->string('product_dimensions')->nullable();
            $table->string('product_img1')->nullable();
            $table->string('product_img2')->nullable();
            $table->string('product_img3')->nullable();
            $table->string('product_img4')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product_categories')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers')
                ->onUpdate('cascade');
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
