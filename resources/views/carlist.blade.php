@extends('layouts.layout')

@section('content')
    @if(request()->input('result') == 1)
        <h1>利用できる車</h1>
    @else
        <h1>練習できる車</h1>
        <p>**レンタルする車で自動車教習所の講習が受けられます**</p>
    @endif
    @foreach($cars as $car)
        <a href="{{ route('carDisplay', ['car_id'=>$car->car_id]) }}">
            <div>
                <img src="{{ asset($car->img_path) }}">
                <p>車種:{{ $car->model }}</p>
                <p>人数:{{ $car->capacity }}</p>
                <p>住所:{{ $car->address }}</p>
            </div>
        </a>
    @endforeach
@endsection