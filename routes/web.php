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

/*
|--------------------------------------------------------------------------
| Routes for login
|--------------------------------------------------------------------------
 */

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Routes for admin dashboard
|--------------------------------------------------------------------------
 */

Route::get('/dashboard/admin', [AdminController::class, 'index'])->middleware(
    'admin'
);
Route::post('/dashboard/admin', [AdminController::class, 'store'])->middleware(
    'admin'
);
Route::put('/dashboard/admin/updateadmin', [
    AdminController::class,
    'update',
])->middleware('admin');

Route::get('dashboard/admin/detailedit/{id}', [
    AdminController::class,
    'detailedit',
])->middleware('admin');

/*
|--------------------------------------------------------------------------
| Routes for teacher dashboard
|--------------------------------------------------------------------------
 */

Route::get('/dashboard/teacher', [
    TeacherController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/teacher', [
    TeacherController::class,
    'store',
])->middleware('auth');
Route::put('/dashboard/teacher/updateteacher', [
    TeacherController::class,
    'update',
])->middleware('auth');

Route::get('dashboard/teacher/detailedit/{id}', [
    TeacherController::class,
    'detailedit',
])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Routes for student dashboard
|--------------------------------------------------------------------------
 */

Route::get('/dashboard/student', [
    StudentController::class,
    'index',
])->middleware('auth');
Route::post('/dashboard/student', [
    StudentController::class,
    'store',
])->middleware('auth');
Route::put('/dashboard/student/updatestudent', [
    StudentController::class,
    'update',
])->middleware('auth');

Route::get('dashboard/student/detailedit/{id}', [
    StudentController::class,
    'detailedit',
])->middleware('auth');

// Route for dashboard (alternate)

/* Route::resource('/dashboard/admins', AdminController::class)->middleware(
    'admin'
); */

/* Route::resource('/dashboard/teachers', TeacherController::class)->middleware(
    'auth'
); */

/* Route::resource('/dashboard/students', StudentController::class)->middleware(
    'auth'
); */

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
