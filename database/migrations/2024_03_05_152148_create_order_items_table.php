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
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->integer('order_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('amount')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->string('status', 10)->nullable()->comment('1-Sản phẩm đã đổi, 2-Sản phẩm đã trả, 3-Sản phẩm được trả');
            $table->integer('combo_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
