<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = 'cadastro';

    protected $fillable = [
        'nome',
        'cidade',
        'telefone',
        'email',
    ];


}
