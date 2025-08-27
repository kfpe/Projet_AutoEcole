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
            $table->enum('categorie', ['A', 'B', 'C', 'D', 'E', 'FB', 'G', 'T', 'FA']);
            $table->enum('type', ['VIP', 'Standard']);
            $table->enum('mode', ['accelere', 'normal']);
            $table->double('prix');
            $table->string('duree', 10);
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
