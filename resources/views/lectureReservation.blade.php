@extends('layouts.layout')

@section('content')
    <form action="{{ route('lectureReservationConfirmation') }}" method="get">
        <div>
            <h1>講習予約</h1>
            <h3>講習指定場所</h3>
            <div>
                <h2>自動車学校</h2>
                <p>住所：<input type="text" name="address" value="a" readonly></p>
                <p>連絡先：<input type="text" name="tel" readonly></p>
            </div>
        </div>
        <div>
            <div>
                <h2>予約日時を指定してください</h2>
                <div>
                    <p>予約日<input type="date" name="date"></p>
                    <p>利用時間
                        <select name="time">
                            <option value="1">10:00 ~ 12:00</option>
                            <option value="2">13:00 ~ 15:00</option>
                            <option value="3">15:00 ~ 17:00</option>
                            <option value="4">17:00 ~ 19:00</option>
                        </select>
                    </p>
                </div>
            </div>
            <div>
                <h2>練習コース</h2>
                <select name="lecture_course_id">
                    <option value="elementary">初級(場内)</option>
                    <option value="intermediate">中級(一般道)</option>
                </select>
            </div>
        </div>

        <button type="submit">予約確定</button>
    </form>
@endsection