<!DOCTYPE html>
<html lang="ja" style="height: 100%">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ペイパードライバーを救いたい</title>
        
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.24/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.24/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.24/dist/js/uikit-icons.min.js"></script>
</head>
<body>
    <div class="uk-flex uk-flex-column uk-flex-between" style="min-height:100vh">
        @include('layouts.header')
        <div class="uk-flex uk-flex-column uk-flex-center uk-flex-middle">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
</body>
</html>