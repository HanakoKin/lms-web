<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    public function absent()
    {
        return view('teacher.class.absent', [
            'title' => 'Course | Absent Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
    public function storage()
    {
        return view('teacher.class.storage', [
            'title' => 'Course | Storage Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
    public function task()
    {
        return view('teacher.class.task', [
            'title' => 'Course | Task Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
    public function discussion()
    {
        return view('teacher.class.discussion', [
            'title' => 'Course | Discussion Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'subjects' => Subject::all(),
        ]);
    }
}
