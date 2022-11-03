<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
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

/* Route::post('/dashboard/subject', [
    SubjectController::class,
    'store',
])->middleware('auth');
 */

// Route for courses

Route::get('/subject/{subject}/assign', [SubjectController::class, 'assignStudents'])->name('subject.assign-student');

Route::post('/subject/{subject}/attach', [SubjectController::class, 'attachAssignedStudents'])->name('subject.attach-student');

Route::delete('/subject/{subject}/detach/{student}', [SubjectController::class, 'detachAssignedStudent'])->name('subject.remove.student');

Route::put('subject/updatesubject', [SubjectController::class, 'updatesubject',])->name('subject.change')->middleware('auth');

Route::get('subject/deletesubject/{id}', [SubjectController::class, 'deletesubject',])->middleware('auth');

Route::get('subject/detailedit/{id}', [SubjectController::class, 'detaileditsubject',])->middleware('auth');

Route::resource('/subject', SubjectController::class)->except('create', 'edit', 'update', 'destroy')->middleware('auth');

/* Route::get('/courses/{name}', [CourseController::class, 'index']); */

/*
|--------------------------------------------------------------------------
| Routes for class dashboard
|--------------------------------------------------------------------------
 */

// Route for attendance menus

Route::post('/class/attendance/attach/{attendance}', [AttendanceController::class, 'attachStudents'])->name('attendance.attach');
Route::put('/class/attendance/attach/{attendance}/update', [AttendanceController::class, 'updateAttendanceData'])->name('attendance.student.update');
Route::resource('/class/attendance', AttendanceController::class);


Route::get('/class/storage/{name}', [ClassController::class, 'storage']);
Route::get('/class/quiz/{name}', [ClassController::class, 'quiz']);
Route::get('/class/discussion/{name}', [
    ClassController::class,
    'discussion',
]);



// Unused route
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/choices', function () {
    return view('entry.register.role', [
        'title' => 'choices',
    ]);
});
