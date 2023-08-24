@extends('layouts.layout')

@section('content')
    <form action="{{ route('completion') }}" method="get">
        <h1>講習予約情報確認</h1>
        <div>
            <h2>予約内容</h2>
            <p>講習場所：</p>
            <p>住所：</p>
            <p>連絡先：</p>
        </div>
        <div>
            <h2>予約日時</h2>
            <p>予約日：</p>
            <p>利用時間：</p>
        </div>

        <button type="submit">予約確定</button>
    </form>
    <a href="{{ route('lectureReservation') }}">戻る</a>
@endsection