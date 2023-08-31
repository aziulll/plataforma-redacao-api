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
        Schema::create('redacaos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->enum('status', ['e','p','c']);
            $table->text('body');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redacaos');
    }
   
    
    
};
