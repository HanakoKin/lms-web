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

        $admin = Student::create([
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

    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
