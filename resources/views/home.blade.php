@extends('layouts.layout')

@section('body-style')
    background-image: url({{ asset('images/home.jpg') }});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
@endsection

@section('content')
    <div class="uk-flex-center" style="background-color:aliceblue; border-radius: 10px; padding:10px;">
        <h1>借りた車で運転練習</h1>
        <div class="uk-flex uk-flex-column">
            <a href="{{ route('q1') }}" style="color:brown">診断を受けて練習してみる？</a>
            <a href="{{ route('carlist') }}">※診断を受けない</a>
        </div>
    </div>
@endsection