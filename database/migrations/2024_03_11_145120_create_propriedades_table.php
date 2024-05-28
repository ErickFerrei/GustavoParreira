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
        Schema::create('propriedades', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 55);
            $table->text('descricao');
            $table->string('tipo', 55);
            $table->string('status', 55);
            $table->string('quarto', 55);
            $table->string('banheiro', 55);
            $table->string('garagem', 55);
            $table->string('area', 55);
            $table->json('images')->nullable();
            $table->integer('endereco_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propriedades');
    }
};
