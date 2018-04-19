<?php

namespace App\Http\Controllers\My;

use App\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Repositories\CourseRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    public function index(CourseRepositoryInterface $repository)
    {
        $courses = $repository->ownedBy(auth()->user());

        return view('my.course.index', compact('courses'));
    }

    public function create()
    {
        return view('my.course.create');
    }

    public function store(StoreCourseRequest $request)
    {
        Course::create($request->all());

        return redirect()->route('my::courses.index')->with('success', 'Course created');

        // $course = new Course();
        // $course->title = $request->title;
        // $course->description = $request->description;
        // $course->price = $request->price;
        // $course->thumbnail = '';
        //
        // // $course->author_id = auth()->user()->getKey();
        // $course->author()->associate(auth()->user());
        //
        // // $course->category_id = 1;
        // $course->category()->associate(1);
        //
        // $course->save();

        // 3. simpan ke DB
        // 4. redirect
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        $this->authorize('update', $course);

        // if (auth()->user()->can('update', $course)) {
        //     return view('my.course.edit', compact('course'));
        // }

        return view('my.course.edit', compact('course'));
        // return redirect()->route('my::courses.index')->withWarning('Opps, tidak boleh');

        // if (Gate::allows('update-course', $course)) {
        //     return view('my.course.edit', compact('course'));
        // }

        // return redirect()->route('my::courses.index')->withWarning('Opps, tidak boleh');
    }
}
