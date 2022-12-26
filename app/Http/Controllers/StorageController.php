<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Folder;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\StorageController;

class StorageController extends Controller
{

    public function index()
    {
        $title = 'Course | Storage Page';
        $name = User::where('name', auth()->user()->name)->get();
        $folders = Folder::withCount('file')->get();
        $uploads = File::latest()->get();
        $uploads->load('teacher');
        return view('teacher.class.storage', compact('folders', 'uploads'));
    }

    public function showFolder($id)
    {

        $title = 'Course | Discussion Page';
        $folders = Folder::where('id', '=', $id)->get();
        $files = File::where('folder_id', '=', $id)->latest()->get();

        return view('teacher.class.storage.show_folder', compact('files', 'folders'));
    }

    public function addFolder(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $create = Folder::create($validatedData + ['teacher_id' => auth()->user()->id] + ['subject_id' => '1']);

        return back()->with('status', 'Good Job, a Folder has been added!');
    }

    public function deleteFolder($id)
    {
        $delete = Folder::where('folders.id', '=', $id)->delete();

        return redirect()->action([StorageController::class, 'index'], ['name' => Auth::user()->name])->with(
            'status',
            'Success delete a folder in your table!'
        );
    }

    public function addFile(Request $request)
    {
        $request->validate([
            'folder_id' => 'required',
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);

        if ($request->hasfile('filename')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());

            $request->file('filename')->move(public_path('files'), $filename);

            File::create([ 'data_file' =>$filename ] + ['teacher_id' => auth()->user()->id] + ['folder_id' => $request->folder_id]);

            return back()->with('status', 'Good Job, a File has been added!');
        }else{
            return back()->with('error', 'Oops, Please try again!');
        }
    }

    public function downloadFile(Request $request,$file)
    {
        return Response::Download(public_path('files/'.$file));
    }

     public function deleteFile($id)
    {
        $file = File::where('files.id', '=', $id)->delete();

        return back()->with(
            'status',
            'Success delete a file from your table!'
        );
    }
}
