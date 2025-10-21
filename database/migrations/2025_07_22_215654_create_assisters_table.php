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
        Schema::create('assisters', function (Blueprint $table) {
            $table->primary(['candidat_id','seance_id']);
            $table->boolean('presence')->default(false); // 1 = présent, 0 = absent
            $table->enum('etat', ['fait', 'non_fait', 'en cour']);
            $table->foreignId('candidat_id')->constrained('candidats')->onDelete('cascade');
            $table->foreignId('seance_id')->constrained('seances')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assisters');
    }
};
