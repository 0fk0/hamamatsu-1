@extends('layouts.layout')

@section('content')
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
        <p>電話番号：</p>
        <p>メールアドレス：</p>
    </div>
    
    {{-- @if()
        <h1>**レンタルする車で自動車教習所の講習が受けられます!**</h1>
        <h2>自動車教習所の予約を希望しますか？<input type="checkbox"></h2>
    @endif --}}

    <button>予約内容確認</button>
    <button>戻る</button>
@endsection