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

Route::get('/dashboard/admin/deleteadmin/{id}', [
    AdminController::class,
    'delete',
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

Route::get('/dashboard/teacher/deleteteacher/{id}', [
    TeacherController::class,
    'delete',
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

Route::get('/dashboard/student/deletestudent/{id}', [
    StudentController::class,
    'delete',
])->middleware('auth');

Route::get('dashboard/student/detailedit/{id}', [
    StudentController::class,
    'detailedit',
])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Routes for subject dashboard
|--------------------------------------------------------------------------
 */

Route::post('/dashboard/subject', [
    SubjectController::class,
    'store',
])->middleware('auth');

Route::put('/dashboard/subject/updatesubject', [
    SubjectController::class,
    'update',
])->middleware('auth');

Route::get('/dashboard/subject/deletesubject/{id}', [
    SubjectController::class,
    'delete',
])->middleware('auth');

Route::get('dashboard/subject/detailedit/{id}', [
    SubjectController::class,
    'detailedit',
])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Routes for courses dashboard
|--------------------------------------------------------------------------
 */

// Route for courses menus
Route::get('/courses/absent/{name}', [CourseController::class, 'absent']);
Route::get('/courses/storage/{name}', [CourseController::class, 'storage']);
Route::get('/courses/quiz/{name}', [CourseController::class, 'quiz']);
Route::get('/courses/discussion/{name}', [
    CourseController::class,
    'discussion',
]);

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
