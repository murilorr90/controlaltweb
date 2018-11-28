<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome', 'email', 'telefone', 'cpf', 'empresa_id'
    ];
}
