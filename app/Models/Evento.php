<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public $table = 'eventos';

    protected $fillable = [
        'titulo',
        'descricao',
        'coordenacao',
        'data_inicio',
        'data_fim',
        'prazo_inicio',
        'prazo_fim',
        'carga_horaria',
        'qnt_participante',
        'descricao_anexo'
    ];

    public function tipoEvento()
    {
        return $this->hasOne(TipoEvento::class);
    }

    public function imagem()
    {
        return $this->hasOne(Media::class);
    }

    public function programacao()
    {
        return $this->hasOne(Media::class);
    }

    public function anexo()
    {
        return $this->hasOne(Media::class);
    }

    public function certificado()
    {
        return $this->hasOne(Certificado::class);
    }

    public function transmissao()
    {
        return $this->hasOne(Transmissao::class);
    }
}
