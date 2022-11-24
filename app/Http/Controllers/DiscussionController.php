<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Topic;
use App\Models\Comment;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{

    public function index()
    {
        $title = 'Course | Discussion Page';
        $name = User::where('name', auth()->user()->name)->get();
        $subjects = Subject::all();
        $topics = Topic::withCount('comment')->with('teacher')->latest()->get();
        $comments = Comment::with('topic')->get();
        return view('teacher.class.discussion', compact('subjects', 'topics', 'comments'));
    }

    public function storetopic(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'string',
        ]);

        $create = Topic::create($validatedData + ['teacher_id' => auth()->user()->id] + ['subject_id' => '1']);

        return back()->with('status', "A new topic has been created, now let's disscuss it!");
    }

    public function storecomment(Request $request)
    {
        $validatedData = $request->validate([
            'topic_id' => 'string',
            'comment' => 'string',
        ]);

        $create = Comment::create($validatedData + ['user_id' => auth()->user()->id]);

        return back()->with('status', 'Success commenting a topic!');
    }

}

