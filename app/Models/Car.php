<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    use hasFactory;
    
    // テーブル名
    protected $table = 'cars';

    // 可変項目
    protected $fillable = ['car_id','model', 'capacity', 'address', 'fee', 'name_owner', 'img_path'];
}

