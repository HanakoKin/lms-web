<?php

namespace App\Models;

use App\Models\User;
use App\Models\Upload_Tugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }

    public function upload_tugas()
    {
        return $this->hasMany(Upload_Tugas::class);
    }

}
