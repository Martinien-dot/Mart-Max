<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('materiels', function (Blueprint $table) {
            $table->decimal('prix_ht', 15, 2)->change();
        });
    }
    
    public function down()
    {
        Schema::table('materiels', function (Blueprint $table) {
            $table->decimal('prix_ht', 8, 2)->change(); // Remettre à l'état précédent
        });
    }
    
};
