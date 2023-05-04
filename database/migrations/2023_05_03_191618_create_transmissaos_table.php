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
        Schema::create('transmissoes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_transmissao_id')->unsigned();
            $table->string('url_transmissao');
            $table->string('detalhes')->nullable();
            $table->timestamps();

            $table->foreign('tipo_transmissao_id')->references('id')->on('tipo_transmissoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transmissaos');
    }
};
