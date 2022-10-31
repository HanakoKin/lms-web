<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Schedule;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsToMany(User::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class,'subject_student','subject_id','student_id')->withTimestamps();
    }
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }
    public function schedule()
    {
        return $this->belongsToMany(Schedule::class);
    }
    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }
}
