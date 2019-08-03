<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Value;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id', 'img1', 'img2', 'img3', 'product', 'description', 'quantity', 'value',
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Values(){
        return $this->hasMany(Value::class);
    }
}
