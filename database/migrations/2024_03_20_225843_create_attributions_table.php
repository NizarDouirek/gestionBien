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
        Schema::create('attributions', function (Blueprint $table) {
            $table->id();
            $table->date('date_attribution')->default(now());
            $table->date('date_retour')->nullable();
            $table->unsignedBigInteger('id_bien');
            $table->foreign('id_bien')->references('id')->on('biens')->onDelete('cascade');
            $table->unsignedBigInteger('id_employe');
            $table->foreign('id_employe')->references('id')->on('employes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributions');
    }
};
