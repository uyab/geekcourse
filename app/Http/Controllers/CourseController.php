<?php

namespace App\Http\Controllers;

use App\Course;
use App\Repositories\CourseRepository;
use App\Repositories\CourseRepositoryInterface;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug, CourseRepositoryInterface $courseRepository)
    {
        $course = Course::whereSlug($slug)->firstOrFail();

        return view('courses.show', compact('course'));
    }
}
