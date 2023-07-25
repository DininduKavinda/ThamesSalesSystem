<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Occupation;
use App\Models\Office;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $office = Office::get();
        $occupation = Occupation::get();
        $department = Department::get();
        return view('welcome', compact('office','occupation','department'));
    }
}
