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
        Schema::create('users', function (Blueprint $table){
        $table->id();    
        $table->unsignedBigInteger('id_document_type');
        $table->unsignedBigInteger('document');
        $table->string('name'); 
        $table->string('last_name');
        $table->unsignedBigInteger('phone');
        $table->string('email')->unique();
        $table->unsignedBigInteger('id_departament');
        $table->unsignedBigInteger('id_city');
        $table->string('address');
        $table->string('neighborhood');
        $table->unsignedBigInteger('password'); 
        $table->unsignedBigInteger('confirm_password'); 
        $table->timestamps(); 
        
        $table->foreign('id_document_type')->references('id')->on('document_types')->onDelete('cascade');
        $table->foreign('id_departament')->references('id')->on('departaments')->onDelete('cascade');
        $table->foreign('id_city')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
