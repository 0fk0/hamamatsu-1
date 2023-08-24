@extends('layouts.layout')

@section('content')
    <h1>借りた車で運転練習</h1>
    <a href="{{ route('q1') }}">診断を受けて練習してみる？</a>
    <a href="{{ route('carlist') }}">※診断を受けない</a>
@endsection