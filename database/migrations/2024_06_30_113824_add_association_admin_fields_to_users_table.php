<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'association_nom')) {
                $table->string('association_nom')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_description')) {
                $table->text('association_description')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_logo')) {
                $table->string('association_logo')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_localisation')) {
                $table->string('association_localisation')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_numero')) {
                $table->integer('association_numero')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_secteur_activite')) {
                $table->string('association_secteur_activite')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_ninea')) {
                $table->string('association_ninea')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_date_creation')) {
                $table->date('association_date_creation')->nullable();
            }
            if (!Schema::hasColumn('users', 'association_statut')) {
                $table->enum('association_statut', ['active', 'inactive'])->nullable();
            }
            if (!Schema::hasColumn('users', 'admin_prenom')) {
                $table->string('admin_prenom')->nullable();
            }
            if (!Schema::hasColumn('users', 'admin_nom')) {
                $table->string('admin_nom')->nullable();
            }
            if (!Schema::hasColumn('users', 'admin_telephone')) {
                $table->integer('admin_telephone')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'association_nom',
                'association_description',
                'association_logo',
                'association_localisation',
                'association_numero',
                'association_secteur_activite',
                'association_ninea',
                'association_date_creation',
                'association_statut',
                'admin_prenom',
                'admin_nom',
                'admin_telephone',
            ]);
        });
    }
};
