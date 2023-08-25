@extends('layouts.layout')

@section('content')
    <form action="{{ route('completion') }}" method="get">
        <h1>講習予約情報確認</h1>
        <div>
            <h2>予約内容</h2>
            <p>講習場所：</p>
            @if(request()->input('time') == "elementary")
                <p>講習コース：初級(場内)</p>
            @else
                <p>講習コース：中級(一般道)</p>
            @endif
            <p>住所：{{ request()->input('address') }}</p>
            <p>連絡先：{{ request()->input('tel') }}</p>
        </div>
        <div>
            <h2>予約日時</h2>
            <p>予約日：{{ request()->input('date') }}</p>
            @switch(request()->input('time'))
                @case(1)
                    <p>利用時間：10:00 ~ 12:00</p>
                    @break
                @case(2)
                    <p>利用時間：13:00 ~ 15:00</p>
                    @break
                @case(3)
                    <p>利用時間：15:00 ~ 17:00</p>
                    @break
                @case(4)
                    <p>利用時間：17:00 ~ 19:00</p>
                    @break
            @endswitch
        </div>

        <button type="submit">予約確定</button>
    </form>
@endsection