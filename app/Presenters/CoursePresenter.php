<?php

namespace App\Presenters;

trait CoursePresenter
{
    public function getExcerptAttribute()
    {
        return str_limit($this->description);
    }

    public function getAuthorNameAttribute()
    {
        return $this->author->name;
    }

    public function getFormattedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
