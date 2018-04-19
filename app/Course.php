<?php

namespace App;

use App\Presenters\CoursePresenter;
use App\Traits\SlugifyTrait;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use CoursePresenter, SlugifyTrait;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $this->slugify($value);
    }
}
