@extends('layouts.layout')

@section('content')
    <form action="{{ route('carReservationConfirmation') }}">
        <div>
            <h1>レンタル予約</h1>
            <div>
                <img src="" alt="">
                <p>車種：</p>
                <p>乗車可能人数：</p>
                <p>住所：</p>
            </div>
        </div>
        <div>
            <div>
                <h2>予約日</h2>
                <div>
                    <p>利用開始日<input type="text"></p>
                    <p>返却日<input type="text"></p>
                </div>
            </div>
            <div>
                <h2>料金</h2>
                <input type="text">
            </div>
            <div>
                <h2>予約者情報入力</h2>
                <div>
                    <p>名前<input type="text"></p>
                    <p>ふりがな<input type="text"></p>
                    <p>電話番号<input type="text"></p>
                    <p>メールアドレス<input type="text"></p>
                </div>
            </div>
        </div>

        {{-- @if() --}}
            <h1>**レンタルする車で自動車教習所の講習が受けられます!**</h1>
            <h2>自動車教習所の予約を希望しますか？ <span>希望する</span><input type="checkbox"></h2>
        {{-- @endif --}}

        <button type="submit">予約内容確認</button>
    </form>

    <a href="{{ route('carDisplay') }}">戻る</a>
@endsection