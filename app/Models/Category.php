<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category', 'description',
    ];

    public function Products(){
        return $this->hasMany(Product::class);
    }
}
