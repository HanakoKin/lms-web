<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['date', 'created_at'];

    public function students()
    {
        return $this->belongsToMany(Student::class,'attendance_student','attendance_id','student_id')->withPivot('status');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeWhereSubject($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('subject_id', "$search");
        });
    }

    public function scopeWhereDateIs($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('date', Carbon::parse($search)->format('Y-m-d'));
        });
    }
}
