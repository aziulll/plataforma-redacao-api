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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('usuario');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token')->nullable();
            $table->boolean('fl_isAdm');
            $table->enum('tipo_de_cadastro', ['estudante', 'corretor', 'full']);
            $table->string('genero');
            $table->string('escolaridade');
            $table->text('sobre_mim')->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
