<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'text' => 'array'
    ];

    public function text()
    {
        if (app()->getLocale() == 'ru')
        {
            return $this->text['ru'];
        }
        elseif (app()->getLocale() == 'en')
        {
            return $this->text['en'];
        }
        return $this->text['uz'];
    }
}
