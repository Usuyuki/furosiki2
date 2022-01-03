<!DOCTYPE html>
<html lang="ja">

<head>
    <title>@yield('title') | furosiki</title>
    @component('components.basis.headMeta')
    @endcomponent
    {{-- 検索インデックスさせない --}}
    <meta name="robots" content="noindex,nofollow">

</head>

<body>
    <!---ヘッダーここから--->
    @component('components.basis.header')
    @endcomponent
    <!---ヘッダーここまで--->

    <!---コンテンツここから--->
    <main class="scroll-container ">
        @yield('content')
    </main>
    <!----コンテンツここまで--->
    <!---フッターここから--->
    @component('components.basis.footer')
    @endcomponent
    <!---フッターここまで--->
</body>

</html>
