@extends('layouts.layout')

@section('content')
    <h1>レンタル予約</h1>
    <form action="{{ route('carReservationConfirmation') }}" method="post">
        @csrf
        <div>
            <img src="{{ asset($car->img_path) }}" alt="">
            <input type="hidden" name="car_id" value="{{ request()->input('car_id') }}">
            <p>車種：{{ $car->model }}</p>
            <p>乗車可能人数：{{ $car->capacity }}</p>
            <p>住所：{{ $car->address }}</p>
            <p>料金(一日あたり)：{{ $car->fee }}</p>
        </div>
        <div>
            <div>
                <h2>予約日</h2>
                <div>
                    <p>利用開始日<input type="date" name="start_date"></p>
                    <p>返却日<input type="date" name="end_date"></p>
                </div>
            </div>
            <div>
                <h2>予約者情報入力</h2>
                <div>
                    <p>名前<input type="text" name="name"></p>
                    <p>ふりがな<input type="text" name="name_kana"></p>
                    <p>電話番号<input type="tel" name="tel"></p>
                    <p>メールアドレス<input type="email" name="mail_address"></p>
                </div>
            </div>
        </div>

        {{-- @if() --}}
            <h1>**レンタルする車で自動車教習所の講習が受けられます!**</h1>
            <h2>自動車教習所の予約を希望しますか？ <span>希望する</span><input type="checkbox" name="lecture"></h2>
        {{-- @endif --}}

        <div class="uk-flex uk-flex-right">
            <button type="submit">内容確認</button>
        </div>
    </form>
@endsection