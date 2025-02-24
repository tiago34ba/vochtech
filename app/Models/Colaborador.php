<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores'; // Define o nome da tabela como 'colaboradores'

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'unidade_id',
    ];
}
