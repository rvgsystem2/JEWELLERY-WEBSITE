<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class collection extends Model
{
    protected $guarded = [
    'id',
    ];

    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
