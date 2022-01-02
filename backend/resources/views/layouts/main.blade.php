<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | かどで日記</title>
    {{-- favicon --}}
    {{--
    <link rel="apple-touch-icon" type="image/png" href="/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/img/favicon/icon-192x192.png"> --}}

    {{-- GoogleFonts --}}
    {{-- kiwi maru --}}
    {{--
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet"> --}}
    {{-- 検索インデックスさせない --}}
    <meta name=”robots” content=”noindex,nofollow”>
    {{-- マテリアルアイコン --}}
    {{--
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
    {{-- CSS読み込み --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/furosikimain.css') }}?ver=1.1">
    {{-- タイムライン用 --}}
    <link href="https://unpkg.com/vis-timeline@latest/styles/vis-timeline-graph2d.min.css" rel="stylesheet"
        type="text/css" />

</head>

<body>

    <!---コンテンツここから--->
    <div class="main-wrapper">
        @yield('content')
    </div>
    <!----コンテンツここまで--->
    <!---PCフッターここから--->
    @component('components.footer')
    @endcomponent
    <!---PCフッターここまで--->



    <script type="text/javascript" src="{{ asset('js/furosikiMain.js') }}?ver=1.1"></script>
</body>

</html>
