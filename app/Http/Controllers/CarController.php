<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index(Request $request)
    {
        // アンケート結果を取得
        $q1_result = $request->input('q1');
        $q2_result = $request->input('q2');

        // アンケート結果に応じて表示する車のデータを選択
        if ($q2_result === 'yes') {
            $cars = Car::where('capacity', '<', 10)->get();
        } elseif ($q2_result === 'yes') {
            $cars = Car::where('capacity', '>=', 10)->get();
        } else {
            $cars = Car::all();
        }

        // 取得したデータをビューに渡して一覧表示
        return view('carlist', ['cars' => $cars]);
    }

    public function show($car_id)
    {
        // 特定の車の情報を取得
        $cars = Car::find($car_id);

        // 詳細情報をビューに渡して表示
        return view('carDisplay', ['car' => $car]);
    }
}
