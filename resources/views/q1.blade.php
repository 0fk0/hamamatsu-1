@extends('layouts.layout')

@section('content')
    <h1>車の運転に自信がありますか？</h1>
    <form action="{{ route('carlist') }}" method="get">
        <button type="submit" value="はい">はい</button>
    </form>
    <form action="{{ route('q2') }}" method="get">
        <button type="submit" value="いいえ">いいえ</button>
    </form>
@endsection