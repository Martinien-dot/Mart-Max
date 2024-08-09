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
        Schema::table('materiels', function (Blueprint $table) {
            //
            $table->string('numero_inventaire')->nullable();
            $table->string('reference')->nullable();
            $table->string('numero_marche')->nullable(); // Peut être vide
            $table->string('lieu_affectation');
            $table->string('prof_occupant')->nullable(); // Peut être vide
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materiels', function (Blueprint $table) {
            //
        });
    }
};
