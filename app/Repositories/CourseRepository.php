<?php

namespace App\Repositories;

use App\Course;

class CourseRepository implements CourseRepositoryInterface
{
    public function popular()
    {
        sleep(3);
        return Course::orderBy('rating', 'DESC')->get();
    }

    public function recommended()
    {

    }

    public function trending()
    {

    }
}
