<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RoleRegisterController extends Controller
{
    // public function index()
    // {
    //     return view('admin.dashboard', [
    //         'title' => 'Dashboard Admin',
    //         'admins' => User::select('name', 'username', 'email')
    //             ->where('role', 'admin')
    //             ->paginate(5)
    //             ->withQueryString(),
    //         'teachers' => User::select('name', 'username', 'email')
    //             ->where('role', 'teacher')
    //             ->paginate(5)
    //             ->withQueryString(),
    //         'students' => User::select('name', 'username', 'email')
    //             ->where('role', 'student')
    //             ->paginate(5)
    //             ->withQueryString(),
    //     ]);
    // }

    public function admin(Request $request)
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

        $admin = Admin::create([
            'user_id' => $user['id'],
            'jenis_kelamin' => $request['gender'],
            'alamat' => $request['address'],
        ]);

        return Redirect::back->with(
            'status',
            'Success adding new Admin to your table!'
        );
    }

    public function teacher(Request $request)
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

        return Redirect::back->with(
            'status',
            'Success adding new Teacher to your table!'
        );
    }

    public function student(Request $request)
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

        return Redirect::back()->with(
            'status',
            'Success adding new Student to your table!'
        );
    }

    public function subject(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Subject::create($validatedData);

        return Redirect::back()->with(
            'status',
            'Success adding new Subject to your table!'
        );
    }
}
