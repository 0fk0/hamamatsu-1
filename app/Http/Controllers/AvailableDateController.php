<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationCar;
use App\Models\ReservationLecture;
use App\Models\Car;

use Carbon\Carbon;

/**
     * 車、講習のそれぞれの予約状況の表示
     * @param $car_id
*/

class AvailableDateController extends Controller
{
    
    public function showEachAvarableDate($request) {

        $car_id = (int)$request;//(int)$car_id_text;
        //echo($car_id);

        //車の予約状況の取得
        $reservation_cars = ReservationCar::where('car_id','=',$car_id)->get(); 
        //echo($reservation_cars);

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
        $car = Car::where('car_id','=',$car_id)->get(); 

        foreach ($car as $data) {
           echo($data->school_id);
           $school_id = $data->school_id;
        }
        
        //該当する車校の予約状況を取得
        $reservation_lecture = ReservationLecture::where('school_id','=',$school_id)->get(); 
        //dd($reservation_lecture);
        foreach ($reservation_lecture as $date) {
            if (!in_array($date, $reserved_list)) {
                $reserved_list[] = $date; 
                //echo($date);
            }
        }

        foreach($reserved_list as $test){
            echo($test);
        }

        return view('carDisplay');//各詳細ページのviewをはる
        

    }
}
