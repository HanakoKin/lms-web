<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return view('student.courses', [
            'title' => 'Course Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
}
