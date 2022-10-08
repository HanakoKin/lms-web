<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route for register
// Route::post('/adminregister', [RoleRegisterController::class, 'admin']);
// Route::post('/teacherregister', [RoleRegisterController::class, 'teacher']);
// Route::post('/studentregister', [RoleRegisterController::class, 'student']);
// Route::post('/subjectregister', [RoleRegisterController::class, 'subject']);

// Route for login & logout
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route for dashboard
// Route::get('/dashboard/admin', [
//     DashboardController::class,
//     'dashboardAdmin',
// ])->middleware('admin');
// Route::get('/dashboard/student', [
//     DashboardController::class,
//     'dashboardStudent',
// ])->middleware('auth');
// Route::get('/dashboard/teacher', [
//     DashboardController::class,
//     'dashboardTeacher',
// ])->middleware('auth');

Route::get('/dashboard/admins', [AdminController::class, 'index'])->middleware(
    'admin'
);
Route::post('/dashboard/admins', [AdminController::class, 'store'])->middleware(
    'admin'
);
Route::put('/dashboard/admins/updateadmin', [
    AdminController::class,
    'update',
])->middleware('admin');

Route::get('dashboard/admins/detailedit/{id}', [
    AdminController::class,
    'detailedit',
])->middleware('admin');

// Route::put('dashboard/admins/updateadmin', [
//     AdminController::class,
//     'updateadmin',
// ])->middleware('admin');

// Route for dashboard (alternate)
// Route::resource('/dashboard/admins', AdminController::class)->middleware(
//     'admin'
// );
Route::resource('/dashboard/teachers', TeacherController::class)->middleware(
    'auth'
);
Route::resource('/dashboard/students', StudentController::class)->middleware(
    'auth'
);
Route::resource('/subjects', SubjectController::class)->middleware('auth');

// Route for courses
Route::get('/courses/{name}', [CourseController::class, 'index']);

// Route for classes
Route::get('/classes/{name}', [KelasController::class, 'index']);

// Unused route
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/choices', function () {
    return view('entry.register.role', [
        'title' => 'choices',
    ]);
});
