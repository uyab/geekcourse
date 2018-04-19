<?php

namespace App\Http\Controllers;

use App\Category;
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
    public function index()
    {
        return view('home.index');
    }
}
