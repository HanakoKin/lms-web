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

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
    }

    public function destroy(Subject $subject)
    {
        //
    }
}
