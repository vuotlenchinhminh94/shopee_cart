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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('id_city')->nullable();
            $table->string('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('note')->nullable();
            $table->longText('product')->nullable();
            $table->text('date_order')->nullable();
            $table->integer('price_shipping')->nullable();
            $table->string('coupon', 11)->nullable();
            $table->string('status')->nullable();
            $table->integer('total_price')->nullable();
            $table->timestamps();
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
