<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Moniteur;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seances', function (Blueprint $table) {
           $table->id();
            $table->string('heure_debut', 10);
            $table->string('heure_fin', 10);
            $table->enum('etat', ['effectue', 'en_cours', 'non_effectue']);
            $table->foreignId('cour_id')->constrained('cours')->onDelete('cascade');
            $table->foreignIdFor(Moniteur::class)->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};
