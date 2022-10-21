<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.dashboard', [
            'title' => 'Dashboard for Student',
            'users' => User::all(),
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

        $student = Student::create([
            'user_id' => $user['id'],
            'nis' => $request['nis'],
            'jenis_kelamin' => $request['gender'],
            'alamat' => $request['address'],
            'tanggal_lahir' => $request['dateofbirth'],
            'kelas' => $request['class'],
            'jurusan' => $request['major'],
        ]);

        return back()->with(
            'status',
            'Success adding new student to your table!'
        );
    }

    public function update(Request $request)
    {
        $student = User::findOrFail($request->id);

        $student->name = $request->name;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->save();

        $ketstudent = Student::where('user_id', $request->id)->first();
        $ketstudent->jenis_kelamin = $request->gender;
        $ketstudent->alamat = $request->address;
        $ketstudent->tanggal_lahir = $request->dateofbirth;
        $ketstudent->kelas = $request->class;
        $ketstudent->jurusan = $request->major;
        $ketstudent->save();

        return back()->with(
            'status',
            'Success update a student in your table!'
        );
    }

    public function delete($id)
    {
        $student = User::where('users.id', '=', $id)->delete();

        return back()->with(
            'status',
            'Success delete a student in your table!'
        );
    }

    public function detailedit($id)
    {
        $student = User::select(
            'users.id',
            'users.name',
            'users.username',
            'users.role',
            'users.email',
            'students.user_id',
            'students.nis',
            'students.jenis_kelamin',
            'students.alamat',
            'students.tanggal_lahir',
            'students.kelas',
            'students.jurusan'
        )
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('users.id', '=', $id)
            ->first();

        return $student;
    }
}
