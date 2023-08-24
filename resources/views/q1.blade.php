@extends('layouts.layout')

@section('content')
    <h1>車の運転に自信がありますか？</h1>
    <a href="{{ route('carlist', ['result'=>1]) }}">はい</a>
    <a href="{{ route('q2') }}">いいえ</a>
@endsection