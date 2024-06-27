<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

  public function up(): void{Schema::table('reservations', function (Blueprint $table) {$table->unsignedBigInteger('id_evenement');  // Créer la colonne id_evenement$table->unsignedBigInteger('id_user');       // Créer la colonne id_user$table->foreign('id_evenement')->references('id')->on('evenements')->onDelete('cascade');  // Assurez-vous que la table référencée est correcte$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
      });}


  public function down(): void{Schema::table('reservations', function (Blueprint $table) {});}
};