<?php

namespace App\Http\Controllers\My;

use App\Repositories\CourseRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(CourseRepositoryInterface $repository)
    {
        $courses = $repository->ownedBy(auth()->user());

        return view('my.course.index', compact('courses'));
    }
}
