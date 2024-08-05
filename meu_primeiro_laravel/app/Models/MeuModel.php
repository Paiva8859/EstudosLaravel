<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeuModel extends Model
{
    use HasFactory;
    protected $fillabe = [
        'nome',
        'descricao',
        'valor'
    ];
}
