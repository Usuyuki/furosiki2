@extends("layouts.withIndex")
@section("title","トップ")

@section('header')
@parent
@endsection
@section('content')


<div class="scroll-area flex items-center justify-center">
    <p class="text-3xl">大切なデータ、包装して送りませんか？</p>
</div>

<div class="scroll-area flex items-center justify-center">
    <p>大切な人に一度きりのデータを。<br>受け取られるとデータはクラウドから抹消されます。</p>
</div>

<div class="scroll-area flex items-center justify-center flex-row-reverse ">
    <div class="flex justify-center flex-row-reverse ">
        <p class="text-2xl">●仕様</p>
        <p class="mt-4 text-xl">保存期間:データ受け取るor1週間経過</p>
        <p class="mt-4 text-xl">最大容量:50MB</p>
    </div>
    <div class="flex justify-center flex-row-reverse ">
        <p class="text-2xl">●用途</p>
        <p class="mt-4 text-xl">デジタルデータのプレゼントに</p>
        <p class="mt-4 text-xl">VRChatterの日々の贈り物に</p>
    </div>
</div>

<div class="scroll-area flex items-center justify-center ">
    <p class="text-2xl">製作者Twitter:<a rel="norefferrer" target="_blank"
            href="https://twitter.com/usuyuki26">@usuyuki26</a></p>
    <p class="text-2xl">個人開発である点、ご了承ください。</p>

</div>

<div class="scroll-area flex items-center justify-center flex-wrap">

    <p class="text-2xl yokogaki mx-12">使ってみる</p>
    <p class="text-2xl"><a href="{{url("/okuru")}}">おくる</a></p>
    <p class="text-2xl"><a href="{{url("/uektoru")}}">うけとる</a></p>

</div>

<div class="scroll-area flex items-center justify-center ">
    <p class="text-2xl yokogaki">copyright 2022 usuyuki</p>

</div>


{{-- <script type="text/javascript" src="{{ asset('js/topPerticle.js') }}"></script> --}}

@endsection
