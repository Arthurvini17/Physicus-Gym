<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alunos extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'cpf',
        'email',
        'date_birth',
    ];
}
