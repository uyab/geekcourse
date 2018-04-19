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
        return view('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, CourseRepositoryInterface $courseRepository)
    {
        $course = Course::findOrFail($id);

        return view('courses.show', compact('course'));
    }
}
