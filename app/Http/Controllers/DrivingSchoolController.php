<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\DrivingSchool;
use App\Models\ReservationCar;
use App\Models\ReservationLecture;
use Illuminate\Http\Request;

use Carbon\Carbon;

class DrivingSchoolController extends Controller
{

    /**
    * return view
    *  'driving_school_info' 車校の詳細情報 
    *  'reserved_car_list' 車の予約日(リスト)
    *  'reserved_lecture_list' 車校の予約のみの日の予約開始日時(リスト)
    */

    public function show(Request $request)
    {
        $car_id = (int)$request->car_id;
        
        //car_idに該当するdriving_school_idを取得
        $car_info = Car::where('car_id', $car_id)->first();
        //dd($car_info->school_id);
        $school_id = $car_info->school_id;
        //dd($school_id);

        //school_idに対応する車校情報を取得
        $driving_school_info = DrivingSchool::where('school_id', $school_id)->first();
        //dd($driving_school_info);

        /* 車の予約状況の取得 */
        $reservation_cars = ReservationCar::where('car_id','=',$car_id)->get(); 
        //echo($reservation_cars);

        $reserved_car_list=[];

        foreach ($reservation_cars as $data) {

            // 2つの日付の間の日付範囲を生成
            $dateRange =Carbon::parse($data->start_date)->daysUntil($data->end_date);
            // 生成された日付範囲を配列として取得
            $tmp_dates = $dateRange->toArray();

            // 配列内にすでに該当する日付がなければ予約日リストに追加(サンプルデータ用)
            foreach ($tmp_dates as $date) {
                if (!in_array($date, $reserved_car_list)) {
                    $reserved_car_list[] = $date; 
                }
            }
        }  

        //車の予約データの取得
        $reserved_lecture_list = [];
        //car_idに対応するschool_idを取得
        $car = Car::where('car_id','=',$car_id)->get(); 

        foreach ($car as $data) {
           $school_id = $data->school_id;
        }

        //該当する車校の予約状況を取得
        $reservation_lecture = ReservationLecture::where('school_id','=',$school_id)->get(); 
        //dd($reservation_lecture);
        foreach ($reservation_lecture as $date) {

            //日付のみに変更
            $datetime = Carbon::parse($date->start_datetime);
            $dateOnly = $datetime->toDateString();  
            $dateOnlyCarbon = Carbon::parse($dateOnly); 

            //車の予約がなく、車校の予約のみの日
            if (!in_array($dateOnlyCarbon, $reserved_car_list) & !in_array($date, $reserved_lecture_list)){
                $reserved_lecture_list[] = $date->start_datetime; 
            }
        }


        return view('lectureReservation',[
            'driving_school_info' => $driving_school_info,
            'reserved_car_list' => $reserved_car_list,
            'reserved_lecture_list' => $reserved_lecture_list
        ]);
    }
}