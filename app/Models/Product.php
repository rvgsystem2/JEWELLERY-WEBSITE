<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];


     public function details()
    {
        return $this->hasMany(ProductDetails::class);
    }

    public function category()
{
    return $this->belongsTo(Category::class);
}

}

