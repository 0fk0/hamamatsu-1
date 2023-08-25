@extends('layouts.layout')

@section('content')
    <h1>レンタル予約確認</h1>
    @if(request()->input('lecture') == 'on')
        <form action="{{ route('lectureReservation') }}" method="get">
    @else
        <form action="{{ route('completion') }}" method="get">
    @endif
            <div>
                <h2>予約内容</h2>
                <p>車種：<input type="text" name="model" value="{{ $car->model }}" readonly></p>
                <p>乗車可能人数：<input type="text" name="capacity" value="{{ $car->capacity}}" readonly></p>
                <p>駐車場住所：<input type="text" name="address" value="{{ $car->address }}" readonly></p>
                <p>所有者：<input type="text" name="name_owner" value="{{ $car->name_owner }}" readonly></p>
                <p>貸出期間：<input type="text" name="start_date" value="{{ request()->input('start_date') }}" readonly>~<input type="text" name="end_date" value="{{ request()->input('end_date') }}" readonly></p>
                <p>料金：<input type="text" name="fee" value="{{ $car->fee }}" readonly></p>
            </div>
            <div>
                <h2>予約者情報</h2>
                <p>名前：<input type="text" name="name" value="{{ request()->input('name') }}" readonly></p>
                <p>ふりがな：<input type="text" name="name" value="{{ request()->input('name_kana') }}" readonly></p>
                <p>電話番号：<input type="text" name="tel" value="{{ request()->input('tel') }}" readonly></p>
                <p>メールアドレス：<input type="text" name="mail_address" value="{{ request()->input('mail_address') }}" readonly></p>
            </div>
            <div>
                <h2>講習希望</h2>
                @if(request()->input('lecture') == 'on')
                    <p>希望する</p>
                    <input type="hidden" name="car_id" value="{{ request()->input('car_id') }}">
                @else
                    <p>希望しない</p>
                @endif
                
                <p>※講習を希望した場合は講習予約画面に遷移します。</p>
            </div>
            <div class="uk-flex uk-flex-right">
                <button type="submit">予約確定</button>
            </div>
        </form>
@endsection