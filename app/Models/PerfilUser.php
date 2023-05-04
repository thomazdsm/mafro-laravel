<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilUser extends Model
{
    use HasFactory;

    public $table = 'perfil_users';
    protected $fillable = [
        'userid',
        'perfilid',
        'created_by',
    ];
}
