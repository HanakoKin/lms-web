<?php

namespace App\Models;

use App\Models\File;
use App\Models\Admin;
use App\Models\Topic;
use App\Models\Folder;
use App\Models\Comment;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Attendance;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class)->withTimeStamps();
    }

     public function attendances()
    {
        return $this->belongsToMany(Attendance::class)->wherePivot('status');
    }

    public function present_count()
    {
        return $this->belongsToMany(Attendance::class)->wherePivot('status', 1)->count();
    }

    public function absent_count()
    {
        return $this->belongsToMany(Attendance::class)->wherePivot('status', 0)->count();
    }

    public function topic()
    {
        return $this->hasMany(Topic::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function folder()
    {
        return $this->hasMany(Folder::class);
    }

    public function file()
    {
        return $this->hasMany(File::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
