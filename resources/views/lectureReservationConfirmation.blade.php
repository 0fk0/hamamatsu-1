@extends('layouts.layout')

@section('content')
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
    
    {{-- @if()
        <h1>**レンタルする車で自動車教習所の講習が受けられます!**</h1>
        <h2>自動車教習所の予約を希望しますか？<input type="checkbox"></h2>
    @endif --}}

    <button>予約確定</button>
    <button>戻る</button>
@endsection