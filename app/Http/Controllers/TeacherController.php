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
            'teachers' => User::select('name', 'username', 'email')
                ->where('role', 'teacher')
                ->paginate(5)
                ->withQueryString(),
            'students' => User::select('name', 'username', 'email')
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
