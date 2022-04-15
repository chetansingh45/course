<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Video;
use App\Models\Teacher;

class Course extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function videos(){
        return $this->hasMany(Video::class,'course_id');
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
}
