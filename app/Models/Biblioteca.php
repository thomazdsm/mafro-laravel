<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;

    public $table = 'biblioteca';
    protected $fillable = [
        'title',
        'filter_tag',
        'anexo',
        'image'
    ];
}
