@extends('layouts.layout')

@section('content')
    <div>
        <h1>講習予約</h1>
        <h3>講習指定場所</h3>
        <div>
            <h2>自動車学校</h2>
            <p>住所：</p>
            <p>連絡先：</p>
        </div>
    </div>
    <div>
        <div>
            <h2>予約日時を指定してください</h2>
            <div>
                <p>予約日<input type="text"></p>
                <p>利用時間<input type="text"></p>
            </div>
        </div>
        <div>
            <h2>練習コース</h2>
            <select name="練習コース">
                <option value="初級(場内)">初級(場内)</option>
                <option value="初級(場内)">中級(一般道)</option>
            </select>
        </div>
    </div>

    <button>予約確定</button>
    <button>戻る</button>
@endsection