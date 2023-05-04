<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTransmissao extends Model
{
    use HasFactory;

    public $table = 'tipo_transmissoes';

    protected $fillable = [
        'titulo'
    ];
}
