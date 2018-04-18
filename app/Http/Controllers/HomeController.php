<?php

namespace App\Http\Controllers;

use App\Course;
use App\Repositories\CacheRepository;
use App\Repositories\CourseRepository;
use App\Repositories\CourseRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CourseRepositoryInterface $repository)
    {
        $popular = $repository->popular();

        $recommended = Course::where('title', 'like', '%iot%')->get();

        return view('home.index');
    }
}
