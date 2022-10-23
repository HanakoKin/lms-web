<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function absent()
    {
        return view('teacher.course.absent', [
            'title' => 'Course | Absent Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
    public function storage()
    {
        return view('student.course.storage', [
            'title' => 'Course | Storage Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
    public function quiz()
    {
        return view('student.course.quiz', [
            'title' => 'Course | Quiz Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
    public function discussion()
    {
        return view('student.course.discussion', [
            'title' => 'Course | Discussion Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
}
