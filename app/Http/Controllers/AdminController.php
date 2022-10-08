<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard Admin',
            'admins' => User::select('id', 'name', 'username', 'email')
                ->where('role', 'admin')
                ->get(),
            'teachers' => User::select('id', 'name', 'username', 'email')
                ->where('role', 'teacher')
                ->get(),
            'students' => User::select('id', 'name', 'username', 'email')
                ->where('role', 'student')
                ->get(),
            'subjects' => Subject::select('name')->get(),
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

        $admin = Admin::create([
            'user_id' => $user['id'],
            'jenis_kelamin' => $request['gender'],
            'alamat' => $request['address'],
        ]);

        return back()->with(
            'status',
            'Success adding new admin to your table!'
        );
    }

    public function update(Request $request)
    {
        $admin = User::findOrFail($request->id);

        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->save();

        $ketadmin = Admin::where('user_id', $request->id)->first();
        $ketadmin->jenis_kelamin = $request->gender;
        $ketadmin->alamat = $request->address;
        $ketadmin->save();

        return back()->with('status', 'Success update an admin in your table!');
    }

    public function detailedit($id)
    {
        $admin = User::select(
            'users.id',
            'users.name',
            'users.username',
            'users.role',
            'users.email',
            'admins.user_id',
            'admins.jenis_kelamin',
            'admins.alamat'
        )
            ->join('admins', 'admins.user_id', '=', 'users.id')
            ->where('users.id', '=', $id)
            ->first();

        return $admin;
    }
}
