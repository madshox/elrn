<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'name' => 'array'
    ];

    public function name()
    {
        if (app()->getLocale() == 'ru')
        {
            return $this->name['ru'];
        }
        elseif (app()->getLocale() == 'en')
        {
            return $this->name['en'];
        }
        return $this->name['uz'];
    }
}
