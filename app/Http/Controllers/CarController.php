<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\ReservationCar;
use App\Models\ReservationLecture;
use Illuminate\Http\Request;

use Carbon\Carbon;

/**
 * return view
 *  'car' 車の詳細情報 
 *  'reserved_car_list' 車の予約日(リスト)
 *  'reserved_lecture_list' 車校の予約日(リスト)
 */

class CarController extends Controller
{

    public function index(Request $request)
    {
        // アンケート結果を取得
        $result = $request->input('result');

        // アンケート結果に応じて表示する車のデータを選択
        if ($result === '3') {
            $cars = Car::where('capacity', '<=', 4)->get();
        } else {
            $cars = Car::all();
        }

        // 取得したデータをビューに渡して一覧表示
        return view('carlist', ['cars' => $cars]);
    }

    public function searchByCarid1(Request $request)
    {
        $car_id = (int)$request->input('car_id');

        // 特定の車の情報を取得
        $car = Car::where('car_id', $car_id)->first();


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

        //reserved lecture date

        $reserved_lecture_list = [];
        //car_idに対応するschool_idを取得
        $car = Car::where('car_id','=',$car_id)->get(); 

        foreach ($car as $data) {
           //echo($data->school_id);
           $school_id = $data->school_id;
        }
        
        //該当する車校の予約状況を取得
        $reservation_lecture = ReservationLecture::where('school_id','=',$school_id)->get(); 
        //dd($reservation_lecture);
        foreach ($reservation_lecture as $date) {
            if (!in_array($date, $reserved_lecture_list)) {
                // 簡略化のため日付のみに変更
                //echo($date->start_datetime);
                $datetime = Carbon::parse($date->start_datetime);
                $dateOnly = $datetime->toDateString();  
                $dateOnlyCarbon = Carbon::parse($dateOnly); 
                $reserved_lecture_list[] = $dateOnlyCarbon; 
                
            }
        }

        // 詳細情報をビューに渡して表示
        return view('carDisplay', [
            'car' => $car, 
            'reserved_car_list' => $reserved_car_list,
            'reserved_lecture_list' => $reserved_lecture_list]);
    }

    public function searchByCarid2(Request $request)
    {
        $car_id = (int)$request->input('car_id');

        // 特定の車の情報を取得
        $car = Car::where('car_id', '=', $car_id)->first();

        // 詳細情報をビューに渡して表示
        return view('carReservation', ['car' => $car]);
    }

    public function searchByCarid3(Request $request)
    {
        $car_id = (int)$request->input('car_id');

        // 特定の車の情報を取得
        $car = Car::where('car_id', '=', $car_id)->first();

        // 詳細情報をビューに渡して表示
        return view('carReservationConfirmation', ['car' => $car]);
    }
}
