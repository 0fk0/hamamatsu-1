@extends('layouts.layout')

@section('content')
    <h1>最後に運転した日はいつですか？</h1>
    <form action="{{ route('carlist') }}" method="get">
        <button type="submit" value="yes">はい</button>
        <button type="submit" value="no">いいえ</button>
    </form>
@endsection