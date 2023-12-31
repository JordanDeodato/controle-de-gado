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
        Schema::create('vacas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('brinco');
            $table->string('cor_brinco')->nullable();
            $table->string('categoria')->nullable();
            $table->string('procedencia')->nullable();
            $table->integer('idade')->nullable();
            $table->string('raca')->nullable();
            $table->integer('preco_compra')->nullable();
            $table->string('paricoes')->nullable();
            $table->date('data_primeira_cria')->nullable();
            $table->date('data_ultima_cria')->nullable();
            $table->string('fazenda')->nullable();
            $table->text('vacinas')->nullable();
            $table->text('observacoes')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacas');
    }
};
