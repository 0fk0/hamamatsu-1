@extends('layouts.layout')

@section('content')
    <div class="uk-flex-center">
        <h1>借りた車で運転練習</h1>
        <div>
            <a href="{{ route('q1') }}">診断を受けて練習してみる？</a>
            <a href="{{ route('carlist') }}">※診断を受けない</a>
        </div>
    </div>
@endsection