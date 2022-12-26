<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Tugas;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        return view('teacher.class.task', [
            'title' => 'Course | Task Page',
            'name' => User::where('name', auth()->user()->name)->get(),
            'tasks' => Tugas::latest()->get(),
        ]);
    }

    public function storetask(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'string',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);



        if ($request->filename != null) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());

            $request->file('filename')->move(public_path('files'), $filename);

            Tugas::create([ 'data_file' => $filename ] + ['teacher_id' => auth()->user()->id] + ['subject_id' => '1'] + ['name' => $request['name']] + ['description' => $request['description']] + ['dateline' => $request['dateline']]);

            return back()->with('status', 'Good Job, a Task with file has been added!');

        }else{
            Tugas::create(['teacher_id' => auth()->user()->id] + ['subject_id' => '1'] + ['name' => $request['name']] + ['description' => $request['description']] + ['dateline' => $request['dateline']]);

            return back()->with('status', 'Good Job, a Task has been added!');
        }

    }

}
