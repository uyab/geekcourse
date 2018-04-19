<?php

namespace App\Traits;

trait SlugifyTrait
{
    protected function slugify($value)
    {
        $slug = $originalSlug = str_slug($value);

        $counter = 0;
        $exists = $this->whereSlug($originalSlug)->exists();

        while ($exists) {
            $counter++;
            $slug = $originalSlug.'-'.$counter;
            $exists = $this->whereSlug($slug)->exists();
        }

        return $slug;
    }
}
