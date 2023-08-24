@extends('layouts.layout')

@section('content')
    {{-- @if() --}}
        <h1>利用できる車</h1>
    {{-- @else
        <h1>練習できる車</h1>
        <p>**レンタルする車で自動車教習所の講習が受けられます**</p>
    @endif --}}
    {{-- @foreach() --}}
        <a href="{{ route('carDisplay') }}">
        <div>
            <img src="" alt="">
            <p>車種:</p>
            <p>人数:</p>
            <p>住所</p>
        </div>
        </a>
    {{-- @endforeach --}}
@endsection