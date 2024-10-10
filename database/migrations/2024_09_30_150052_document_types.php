<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('document_types', function (Blueprint $table) {
        $table->id(); 
        $table->string('name_document'); 
        $table->timestamps(); 
    });
}

public function down()
{
    Schema::dropIfExists('document_types');
}
};
