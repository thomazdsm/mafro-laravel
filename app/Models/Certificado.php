<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    public $table = 'certificados';

    protected $fillable = [
        'titulo',
        'descricao'
    ];

    public function background()
    {
        return $this->hasOne(Media::class);
    }
}
