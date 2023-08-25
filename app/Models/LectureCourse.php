<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureCourse extends Model
{
    use HasFactory;

    protected $table = 'lecture_courses';// テーブル名

    //取得情報
    protected $fillable = [
        'lecture_course_id',
        'name'
    ];

}
