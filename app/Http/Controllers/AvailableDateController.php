<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation_car;
use App\Models\Reservation_lecture;

/**
     * 車、講習のそれぞれの予約状況の表示
     * @param $car_id
*/

class AvailableDateController extends Controller
{
    
    public function showEachAvarableDate ($car_id) {

        //car_idが一致する車予約データを取得
        $reservation_car = Reservation_car::where('car_id','=',$car_id)->get();

        //講習予約データを取得
        $reservation_car = Reservation_car::all();

        return view();//各詳細ページのviewをはる

    }
}
