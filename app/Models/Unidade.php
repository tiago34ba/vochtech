<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'bandeiras';
    use HasFactory;
    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'bandeira',
    ];

}
