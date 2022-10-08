<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard Admin',
            'admins' => User::select('name', 'username', 'email')
                ->where('role', 'admin')
                ->paginate(5)
                ->withQueryString(),
            'teachers' => User::select('name', 'username', 'email')
                ->where('role', 'teacher')
                ->paginate(5)
                ->withQueryString(),
            'students' => User::select('name', 'username', 'email')
                ->where('role', 'student')
                ->paginate(5)
                ->withQueryString(),
            'subjects' => Subject::select('name')
                ->paginate(5)
                ->withQueryString(),
        ]);
    }

    public function dashboardTeacher()
    {
        return view('teacher.dashboard', [
            'title' => 'Dashboard for Teacher',
            'teachers' => User::select('name', 'username', 'email')
                ->where('role', 'teacher')
                ->paginate(5)
                ->withQueryString(),
            'students' => User::select('name', 'username', 'email')
                ->where('role', 'student')
                ->paginate(5)
                ->withQueryString(),
        ]);
    }
    public function dashboardStudent()
    {
        return view('student.dashboard', [
            'title' => 'Dashboard for Student',
            'users' => User::all(),
        ]);
    }
}
