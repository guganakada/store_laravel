<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';

    protected $fillable = [
        'name', 'email', 'address', 'number', 'complement', 'city', 'state', 'zipcode',
        'phone1', 'phone2', 'cellphone', 'cnpj', 'ie', 'cpf', 'description', 'level',
    ];
}
