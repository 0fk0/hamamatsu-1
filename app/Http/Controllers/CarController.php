<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        // Car モデルからすべての車のデータを取得
        $cars = Car::all();

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
