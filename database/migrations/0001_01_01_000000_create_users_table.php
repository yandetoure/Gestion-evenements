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
            $table->string('prenom');
            $table->string('nom');
            $table->string('adresse');
            $table->date('date_de_naissance');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Champs pour les associations
            $table->string('association_nom')->nullable();
            $table->text('association_description')->nullable();
            $table->string('association_logo')->nullable();
            $table->string('association_localisation')->nullable();
            $table->integer('association_numero')->nullable();
            $table->string('association_secteur_activite')->nullable();
            $table->string('association_ninea')->nullable();
            $table->date('association_date_creation')->nullable();
            $table->enum('association_statut', ['active', 'inactive'])->nullable();

            // Champs pour les admins
            $table->string('admin_prenom')->nullable();
            $table->string('admin_nom')->nullable();
            $table->integer('admin_telephone')->nullable();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
