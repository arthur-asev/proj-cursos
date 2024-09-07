<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    use HasFactory;

    protected $table = 'maps';

    protected $fillable = [
        'endereco',
        'latitude',
        'longitude',
    ];


}
