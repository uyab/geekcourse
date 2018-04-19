<?php

namespace App;

use App\Traits\SlugifyTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SlugifyTrait;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = $this->slugify($value);
    }
}
