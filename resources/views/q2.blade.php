@extends('layouts.layout')

@section('content')
    <h1>最後に運転した日はいつですか？</h1>
    <a href="{{ route('carlist', ['result'=>2]) }}">最近運転しました！</a>
    <a href="{{ route('carlist', ['result'=>3]) }}">いつ運転したかわからないです。。。<div class=""></div></a>
@endsection