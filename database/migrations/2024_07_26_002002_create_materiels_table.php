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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id(); // Identifiant unique auto-incrémenté
            $table->string('numero_ordre')->unique(); // Identifiant unique pour "Numero d’ordre"
            $table->string('departement'); // Département
            $table->string('designation'); // Désignation
            $table->string('categorie'); // Catégorie
            $table->string('fournisseur'); // Fournisseur
            $table->decimal('prix_ht', 8, 2); // Prix HT
            $table->date('date_acquisition'); // Date d’acquisition
            $table->timestamps(); // Timestamps pour created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};
