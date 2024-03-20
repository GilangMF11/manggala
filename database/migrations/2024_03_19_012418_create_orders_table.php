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
            $table->string('order_id');
            $table->string('username', 55);
            $table->string('wa');
            $table->integer('product_id');
            $table->string('product');
            $table->bigInteger('price');
            $table->string('user_id');
            $table->string('zone_id');
            $table->string('nickname');
            $table->integer('method_id');
            $table->string('method', 100);
            $table->string('games', 100);
            $table->integer('games_id');
            $table->enum('status', ['Pending','Processing','Success','Canceled','Expired','Finished']);
            
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
