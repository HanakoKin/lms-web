<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $subject = Subject::all();
        return view(
            'teacher.course.absent',
            compact('attendances', 'subjects')
        );
    }

    public function store(StoreAttendanceRequest $request)
    {
        $attendance = Attendance::create(
            $request->validated() + ['user_id' => Auth::id()]
        );
        $subject = Subject::findOrFail($request->get('subject_id'));
        $subject->load('students');
        alert('Good Job', 'You can start your attendance now !!!', 'success');
        return view('', compact('attendance', 'subject'));
    }

    public function edit(Attendance $attendance)
    {
        $attendance->load('students', 'subject');
        return view('', compact('attendance'));
    }

    public function attachStudents(Attendance $attendance, Request $request)
    {
        if ($request->get('status') == null) {
            $attendance->delete();
            alert(
                'Oops',
                "You didn't take any attendance. Try again and fill all entries please",
                'error'
            );
        } else {
            foreach ($request->get('status') as $student_id => $status) {
                $student = Student::findOrFail($student_id);
                if ($status = 'on') {
                    $value = 1;
                } elseif ($status = 'off') {
                    $value = 0;
                } else {
                    $value = null;
                }
                $attendance
                    ->students()
                    ->attach($student_id, ['status' => $value]);
            }
            alert('Good Job', 'Attendance taken successfully', 'success');
        }
        return back();
    }

    public function updateAttendanceData(
        Attendance $attendance,
        Request $request
    ) {
        $attendance->students()->detach();
        $this->attachStudents($attendance, $request);
        alert('Good Job', 'Attendance data updated successfully', 'success');
    }

    public function destroy(Attendance $attendance)
    {
        try {
            $attendance->delete();
        } catch (\Exception $exception) {
            alert('Oops', 'Please try again', 'error');
        }
        alert('Good Job', 'Attendance removed successfully', 'success');
        return back();
    }
}
