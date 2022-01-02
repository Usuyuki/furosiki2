<!DOCTYPE html>
<html lang="ja">

<head>
    <title>@yield('title') | furosiki</title>
    @component('components.basis.headMeta')
    @endcomponent
</head>

<body>
    <!---ヘッダーここから--->
    @component('components.basis.header')
    @endcomponent
    <!---ヘッダーここまで--->

    <!---コンテンツここから--->
    <div class="main-wrapper">
        @yield('content')
    </div>
    <!----コンテンツここまで--->
    <!---フッターここから--->
    @component('components.basis.footer')
    @endcomponent
    <!---フッターここまで--->
</body>

</html>
