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
        Schema::create('formations', function (Blueprint $table){
            $table->id();
            $table->enum('categories', ['A', 'B', 'C', 'D', 'E', 'FB', 'G', 'T', 'FA']);
            $table->enum('type', ['vip', 'standard']);
            $table->enum('mode', ['accelerer', 'normal']);
            $table->decimal('prix',10,2);
            $table->integer('duree');
            $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('formations');
    }
};
