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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->date('DateNais');
            $table->string('Adresse')->nullable();
            $table->string('Metier')->nullable();
            $table->string('Image')->nullable();
            $table->string('Login')->unique();
            $table->string('Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
