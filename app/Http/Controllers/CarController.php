<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

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
        $car = Car::where('car_id', '=', $car_id)->first();

        // 詳細情報をビューに渡して表示
        return view('carDisplay', ['car' => $car]);
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
