<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Car モデルからすべての車のデータを取得
        $cars = Car::all();

        // 取得したデータをビューに渡して一覧表示
        return view('cars.index', ['cars' => $cars]);
    }

    public function show($id)
    {
        // 特定の車の情報を取得
        $car = Car::find($id);

        // 詳細情報をビューに渡して表示
        return view('cars.show', ['car' => $car]);
    }
}
