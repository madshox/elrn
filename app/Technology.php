<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
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

    public function description()
    {
        if (app()->getLocale() == 'ru')
        {
            return $this->description['ru'];
        }
        elseif (app()->getLocale() == 'en')
        {
            return $this->description['en'];
        }
        return $this->description['uz'];
    }
}
