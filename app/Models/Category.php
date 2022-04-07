<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use Carbon\Carbon;

class Category extends Model
{
    use HasFactory;

    public function courses(){
        return $this->hasMany(Course::class,'category_id');
    }

    public function getCreatedAtAttribute($val){
        return Carbon::parse($val)->diffForHumans();
    }
}
