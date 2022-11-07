<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Subject_Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreAttendanceRequest;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with(['subject', 'teacher'])
            ->WhereSubject(request()->get('subject_filter'))
            ->WhereDateIs(request()->get('date_filter'))
            ->withCount('students')
            ->get();
        $subjects = Subject::all();
        return view('teacher.class.absent', compact('attendances', 'subjects')
        );
    }

    public function store(StoreAttendanceRequest $request)
    {
        $attendance = Attendance::create($request->validated() + ['user_id' => Auth::id()]);
        return back()->with('status', 'Good Job, You can start your attendance now !!!');
    }

    public function show(Attendance $attendance)
    {
        $subject = Subject::findorfail($attendance->first('subject_id'));
        $subject->load('students');

        $attendance = Attendance::findorfail($attendance->id);

        return view('teacher.class.absent.take-attendance', compact('subject', 'attendance'));
    }

    public function edit(Attendance $attendance)
    {
        $attendance->load('students', 'subject');
        return view('teacher.class.absent.edit-attendance', compact('attendance'));
    }

    public function attachStudents(Attendance $attendance, Request $request)
    {
        if ($request->get('status') == null) {
            $attendance->delete();

            return redirect('/class/attendance')->with('error', "Oops, You didn't take any attendance. Try again and fill all entries please");
        } else {
            foreach ($request->get('status') as $student_id => $status) {
                $student = User::findOrFail($student_id);
                if ($status = 'on') {
                    $value = 1;
                } elseif ($status = 'off') {
                    $value = 0;
                } else {
                    $value = null;
                }
                $attendance->students()->attach($student_id, ['status' => $value]);
            }
            return redirect('/class/attendance')->with('success', 'Good Job, Attendance taken successfully');
        }
    }

    public function updateAttendanceData(Attendance $attendance,Request $request)
    {
        $attendance->students()->detach();
        $this->attachStudents($attendance, $request);
        return redirect('/class/attendance')->with('status', 'Good Job, Attendance data updated successfully');
    }

    public function destroy(Attendance $attendance)
    {
        try {
            $attendance->delete();
        } catch (\Exception $exception) {
            return back()->with('error', 'Oops, Please try again');
        }
        return back()->with('status', 'Good Job, Attendance removed successfully');
    }
}
