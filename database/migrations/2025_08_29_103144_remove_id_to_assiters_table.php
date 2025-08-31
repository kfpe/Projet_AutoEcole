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
        Schema::table('assisters', function (Blueprint $table) {
            $table->dropPrimary();
            // J'ai creer ce type de cle primaire afn d'eviter les doublons cet a dire qu'un candidat ne peut pas etre present deux fois dans une seance
            $table->primary(['candidat_id','seance_id'])->first();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assisters', function (Blueprint $table) {
            $table->id();
        });
    }
};
