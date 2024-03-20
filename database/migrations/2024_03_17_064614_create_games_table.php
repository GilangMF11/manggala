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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('games', 100);
            $table->string('category', 250);
            $table->string('image');
            $table->string('slug', 200);
            $table->string('target', 100);
            $table->integer('sort');
            $table->longtext('content');
            $table->enum('status', ['On', 'Off']);
            $table->enum('check_status', ['Y', 'N']);
            $table->string('check_code', 55);
            $table->string('subtitle', 200);
            $table->string('subdescription', 200);
            $table->string('subimage');
            $table->string('infoimage');
            $table->string('kode', 55);
            $table->string('provider', 55);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
