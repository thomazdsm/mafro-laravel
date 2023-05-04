<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmissao extends Model
{
    use HasFactory;

    public $table = 'transmissoes';

    protected $fillable = [
        'titulo',
        'tipo_transmissao_id',
        'url_transmissao',
        'detalhes'
    ];

    protected $searchable =[
        'tipo_transmissao_id' => '='
    ];

    public function tipo_transmissao()
    {
        return $this->belongsTo(TipoTransmissao::class);
    }
}
