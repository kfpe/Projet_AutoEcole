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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 60);
            $table->string('prenom', 60);
            $table->string('sexe', 15);
            $table->string('adresse');
            $table->string('email')->unique();
            $table->string('tel')->unique();
            $table->string('password');
            $table->string('role');
            $table->foreignId('agence_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
