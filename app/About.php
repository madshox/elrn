<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'description' => 'array',
    ];

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
