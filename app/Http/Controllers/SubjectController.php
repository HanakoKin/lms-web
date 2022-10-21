<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Subject::create($validatedData);

        return Redirect('/dashboard/admin')->with(
            'status',
            'Success adding new Subject to your table!'
        );
    }

    public function update(Request $request)
    {
        $subject = Subject::findOrFail($request->id);
        $subject->name = $request->name;
        $subject->save();

        return back()->with(
            'status',
            'Success update a subject in your table!'
        );
    }

    public function delete($id)
    {
        $subject = Subject::where('subjects.id', '=', $id)->delete();

        return back()->with(
            'status',
            'Success delete a subject in your table!'
        );
    }

    public function detailedit($id)
    {
        $subject = Subject::select('subjects.id', 'subjects.name')
            ->where('subjects.id', '=', $id)
            ->first();

        return $subject;
    }
}
