<?php

namespace App\Repositories;

use App\Course;

class CourseRepository implements CourseRepositoryInterface
{
    public function popular()
    {
        return Course::orderBy('rating', 'DESC')->limit(5)->get();
    }

    public function recommended()
    {
        return Course::where('title', 'like', '%iot%')->limit(5)->get();
    }

    public function trending()
    {

    }
}
