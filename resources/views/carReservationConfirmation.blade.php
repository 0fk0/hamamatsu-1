@extends('layouts.layout')

@section('content')
    @if(request()->input('lecture') == 'on')
        <form action="{{ route('lectureReservation') }}" method="get">
    @else
        <form action="{{ route('completion') }}" method="get">
    @endif
            <h1>レンタル予約</h1>
            <div>
                <h2>予約内容</h2>
                <p>車種：</p>
                <p>乗車可能人数：</p>
                <p>駐車場住所：</p>
                <p>所有者：</p>
                <p>所有者連絡先：</p>
                <p>貸出期間：</p>
                <p>料金：</p>
            </div>
            <div>
                <h2>予約者情報</h2>
                <p>名前：</p>
                <p>住所：</p>
                <p>電話番号</p>
                <p>メールアドレス</p>
            </div>
            <div>
                <h2>講習希望</h2>
                @if(request()->input('lecture') == 'on')
                    <p>希望する</p>
                    <input type="text" name="car_id" value="{{ request()->input('car_id') }}">
                @else
                    <p>希望しない</p>
                @endif
                
                <p>※講習を希望した場合は講習予約画面に遷移します。</p>
            </div>

            <button type="submit">予約確定</button>
        </form>
        <a href="{{ route('carReservation') }}">戻る</a>
@endsection