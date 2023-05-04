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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_evento_id')->unsigned();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('coordenacao');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->date('prazo_inicio');
            $table->date('prazo_fim');
            $table->integer('carga_horaria')->nullable();
            $table->integer('qnt_participante')->nullable();
            $table->text('descricao_anexo')->nullable();
            $table->bigInteger('anexo_imagem_id')->unsigned()->nullable();
            $table->bigInteger('anexo_programacao_id')->unsigned()->nullable();
            $table->bigInteger('anexo_id')->unsigned()->nullable();
            $table->bigInteger('certificado_id')->unsigned()->nullable();
            $table->bigInteger('transmissao_id')->unsigned()->nullable();

            $table->foreign('tipo_evento_id')->references('id')->on('tipo_eventos');
            $table->foreign('anexo_imagem_id')->references('id')->on('media');
            $table->foreign('anexo_programacao_id')->references('id')->on('media');
            $table->foreign('anexo_id')->references('id')->on('media');
            $table->foreign('certificado_id')->references('id')->on('certificados');
            $table->foreign('transmissao_id')->references('id')->on('transmissoes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
