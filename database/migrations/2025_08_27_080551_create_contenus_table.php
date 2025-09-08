<?php

use App\Models\Cour;
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
        Schema::create('contenus', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->enum('type', ['pdf', 'video', 'audio']);
            $table->string('lien');
            $table->foreignIdFor(Cour::class)->constrained()->cascadeOnDelete();
            $table->foreignId('moniteur_id')->constrained()->onDelete('cascade');
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenus');
    }
};
