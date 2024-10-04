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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo'); 
            $table->string('placa'); 
            $table->string('modelo'); 
            $table->string('capacidad'); 
            $table->unsignedBigInteger('id_estado'); 
            $table->decimal('consumo_de_combustible'); 
            $table->foreign('id_tipo')->references('id')->on('vehicle_types')->onDelete('cascade');
            $table->foreign('id_estado')->references('id')->on('vehicle_statuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
