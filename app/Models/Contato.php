<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    public $table = 'contatos';

    protected $fillable = [
        'title',
        'subtitle',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'pais',
        'email',
        'telefone',
        'mapframe'
    ];
}
