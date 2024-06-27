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
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('logo');
            $table->string('lieu');
            $table->string('numero');
            $table->string('secteur_activite');
            $table->string('ninea');
            $table->date('date_creation');
            $table->string('email');
            $table->string('password');
            $table->enum('statut', ['Actif', 'Inactif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associations');
    }
};
