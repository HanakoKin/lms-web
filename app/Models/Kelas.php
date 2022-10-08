<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}
