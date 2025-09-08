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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->date('date_naissance');
            $table->string('lieu_naissance', 30);
            $table->string('nom_pere', 30);
            $table->string('nom_mere', 30);
            $table->enum('decision', ['admis', 'echec'])->nullable();
            $table->string('photo')->nullable();
            $table->enum('statut', ['solvable', 'insolvable']);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('formation_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
