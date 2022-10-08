<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsToMany(Teacher::class);
    }
    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }
    public function schedule()
    {
        return $this->belongsToMany(Schedule::class);
    }
}
