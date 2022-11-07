<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->hasOne(Kelas::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_student', 'student_id', 'subject_id')->withTimestamps();
    }

   /*  public function attendances()
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
    } */

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}
