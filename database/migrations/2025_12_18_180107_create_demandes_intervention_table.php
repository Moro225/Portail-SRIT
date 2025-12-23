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
        Schema::create('demandes_intervention', function (Blueprint $table) {
            $table->id();
            $table->string('ufr_direction');
            $table->string('service_departement');
            $table->string('nom_complet');
            $table->string("email");
            $table->string('telephone');
            $table->string("objet");
            $table->text("message");
            $table->string('statut')->default('nouvelle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes_intervention');
    }
};
