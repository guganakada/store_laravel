<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name', 'email', 'birth_date', 'gender', 'address', 'number', 'complement',
        'city', 'state', 'zipcode', 'phone', 'cellphone', 'rg', 'cpf', 'profession', 'level',
    ];
}
