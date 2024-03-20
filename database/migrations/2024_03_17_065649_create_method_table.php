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
        Schema::create('method', function (Blueprint $table) {
            $table->id();
            $table->string('method', 55);
            $table->string('image');
            $table->enum('uniq', ['Y', 'N']);
            $table->string('provider', 100);
            $table->string('code', 55);
            $table->string('rek');
            $table->longtext('instruksi');
            $table->enum('status', ['On', 'Off']);
            $table->string('type', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('method');
    }
};
