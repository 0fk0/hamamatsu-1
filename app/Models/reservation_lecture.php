<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_lecture extends Model
{
    protected $table = 'reservation_lectures';// テーブル名

    //取得情報
    protected $filable = [
        'reservation_lecture_id',
        'school_id',
        'start_datetime',
        'end_datetime',
        'lecture_course_id'
    ];
}
