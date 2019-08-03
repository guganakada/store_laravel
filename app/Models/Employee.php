<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Responsibility;
use App\User;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name', 'email', 'birth_date', 'gender', 'address', 'number', 'complement', 'city', 'state', 'zipcode',
        'phone', 'cellphone', 'rg', 'cpf', 'cnh', 'scholarity','profession', 'description', 'salary',
        'photo', 'level', 'responsibility_id', 'user_id',
    ];

    public function Responsibility(){
        return $this->belongsTo(Responsibility::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
