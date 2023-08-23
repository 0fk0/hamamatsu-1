<?php

/*
    車のレンタル状況の取得model
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_car extends Model
{
    protected $table = 'reservation_cars';// テーブル名

    //取得情報
    protected $filable = [
        'reservation_car_id',
        'car_id',
        'start_date',
        'end_date'
    ];

}
