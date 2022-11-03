<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{

    public function index()
    {
        $title = 'Course Page';
        $name = User::where('name', auth()->user()->name)->get();
        $users = User::all();
        $subjects = Subject::withCount('students')->with('teacher')->get();
        return view('teacher.courses.index', compact('subjects', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'string',
        ]);

        Subject::create($validatedData);

        return back()->with('status', 'Success adding new subject to your table!');
    }

    public function show(Subject $subject)
    {
        return view('teacher.courses.show', compact('subject'));
    }

    public function assignStudents(Subject $subject)
    {
        $students = Student::WhereNotIn('id', $subject->students->pluck('id'))->get();
        return view('teacher.courses.assign-student', compact('students', 'subject'));
    }

    public function attachAssignedStudent(Subject $subject, Request $request)
    {
        $subject->students()->attach($request->get('students'));
        return redirect()->route('subject.index')->with('status', 'Student assigned successfully');
    }

    public function detachAssignedStudent(Subject $subject, Request $request)
    {
        $subject->students()->detach($student);
        return back()->with('status', $student->name . ' removed successfully');
    }

    public function updatesubject(Request $request)
    {
        $subject = Subject::findOrFail($request->id);
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->save();

        return back()->with(
            'status',
            'Success update a subject in your table!'
        );
    }

    public function deletesubject($id)
    {
        $subject = Subject::where('subjects.id', '=', $id)->delete();

        return back()->with(
            'status',
            'Success delete a subject in your table!'
        );
    }

    public function detaileditsubject($id)
    {
        $subject = Subject::select('subjects.id', 'subjects.name', 'subjects.description')
            ->where('subjects.id', '=', $id)
            ->first();

        return $subject;
    }
}
