<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Responsibility extends Model
{
    protected $table = 'responsibilities';

    protected $fillable = [
        'responsibility', 'description', 'salary1', 'salary2',
    ];

    public function Employees(){
        return $this->hasMany(Employee::class);
    }
}
