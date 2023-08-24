<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingSchool extends Model
{
    use HasFactory;

    protected $table = 'driving_schools';// テーブル名

    //取得情報
    protected $fillable = [
        'school_id',
        'name',
        'adderss',
        'tel'
    ];
}
