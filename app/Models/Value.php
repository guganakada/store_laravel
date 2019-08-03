<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Value extends Model
{
    protected $table = 'values';

    protected $fillable = [
        'product_id', 'cost', 'value', 'observation', 'current',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
