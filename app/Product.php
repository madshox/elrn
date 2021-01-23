<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
        'id'
    ];

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
