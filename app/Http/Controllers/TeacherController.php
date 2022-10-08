<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.dashboard', [
            'title' => 'Dashboard for Teacher',
            'teachers' => User::select('id', 'name', 'username', 'email')
                ->where('role', 'teacher')
                ->paginate(5)
                ->withQueryString(),
            'students' => User::select('id', 'name', 'username', 'email')
                ->where('role', 'student')
                ->paginate(5)
                ->withQueryString(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5, max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        $admin = Teacher::create([
            'user_id' => $user['id'],
            'nip' => $request['nip'],
            'jenis_kelamin' => $request['gender'],
            'alamat' => $request['address'],
        ]);

        return back()->with(
            'status',
            'Success adding new teacher to your table!'
        );
    }

    public function update(Request $request)
    {
        $teacher = User::findOrFail($request->id);

        $teacher->name = $request->name;
        $teacher->username = $request->username;
        $teacher->email = $request->email;
        $teacher->save();

        $ketteacher = Teacher::where('user_id', $request->id)->first();
        $ketteacher->nip = $request->nip;
        $ketteacher->jenis_kelamin = $request->gender;
        $ketteacher->alamat = $request->address;
        $ketteacher->save();

        return back()->with(
            'status',
            'Success update a teacher in your table!'
        );
    }

    public function detailedit($id)
    {
        $teacher = User::select(
            'users.id',
            'users.name',
            'users.username',
            'users.role',
            'users.email',
            'teachers.user_id',
            'teachers.nip',
            'teachers.jenis_kelamin',
            'teachers.alamat'
        )
            ->join('teachers', 'teachers.user_id', '=', 'users.id')
            ->where('users.id', '=', $id)
            ->first();

        return $teacher;
    }
}
