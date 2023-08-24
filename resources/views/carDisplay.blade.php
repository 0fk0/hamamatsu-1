@extends('layouts.layout')

@section('content')
    <h1>自動車詳細情報</h1>
    <div>
        <img src="" alt="">
        <div>
            <p>車種：</p>
            <p>最大乗車可能人数：</p>
            <p>住所：</p>
            <p>料金(/日)：</p>
            <p>所有者：</p>
            <p>一言コメント</p>
        </div>
    </div>
    <div>
        <h1>予約可能日</h1>
        <table border="1">
            @php
                $daysOfWeek = array("日", "月", "火", "水", "木", "金", "土")
            @endphp
            @for($i = 0; $i < 7; $i++)
                @if($i == 0)
                    <tr>
                        @for($j = 0; $j < 7; $j++)
                            <th>{{ $daysOfWeek[$j] }}</th>
                        @endfor
                    </tr>
                @else
                    <tr>
                        @for($j = 0; $j < 7; $j++)
                            @php
                                $index = ($i-1)*7 + $j + 1
                            @endphp
                            @if($index > 31)
                                <th>-</th>
                            @else
                                <th>{{ ($i-1)*7 + $j + 1 }}</th>
                            @endif
                            
                        @endfor
                    </tr>
                @endif
            @endfor
        </table>
    </div>
    <a href="{{ route('carReservation', ['car_id'=>request()->input('car_id')]) }}">この車で予約を行う</a>

    <a href="{{ route('carlist') }}">戻る</a>
@endsection
