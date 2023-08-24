<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationCar;
use App\Models\ReservationLecture;
use Carbon\Carbon;

/**
     * 車、講習のそれぞれの予約状況の表示
     * @param $car_id
*/

class AvailableDateController extends Controller
{
    
    public function showEachAvarableDate() {

        
        $car_id =4; //テスト用

        //reserved car date
        $reservation_cars = ReservationCar::where('car_id','=',$car_id)->get(); 

        $reserved_list=[];
        
        foreach ($reservation_cars as $data) {

            // 2つの日付の間の日付範囲を生成
            $dateRange =Carbon::parse($data->start_date)->daysUntil($data->end_date);
            // 生成された日付範囲を配列として取得
            $tmp_dates = $dateRange->toArray();
            // 配列内にすでに該当する日付がなければ予約日リストに追加(サンプルデータ用)
            foreach ($tmp_dates as $date) {
                if (!in_array($date, $reserved_list)) {
                    $reserved_list[] = $date; 
                    //echo($date);
                }
            }
        }    

        //reserved lecture date

        //car_idに対応するschool_idを取得
        //

        $reservation_lecture = ReservationLecture::all();
        dd($reservation_lecture);

        //dd($reservation_lecture);

        return view('carDisplay');//各詳細ページのviewをはる

    }
}
