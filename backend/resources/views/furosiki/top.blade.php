@extends("layouts.withIndex")
@section("title","トップ")

@section('header')
@parent
@endsection
@section('content')


<div class="scroll-area">
    <p>大切なデータ、包装して送りませんか？</p>
</div>

<div class="scroll-area">
    <p>大切な人に一度きりのデータを<br>受け取られるとデータはクラウドから抹消されます。</p>
</div>

<div class="scroll-area flex justify-center ">
    <p class="text-2xl">保存期間:最大1週間</p>
    <p class="text-2xl">最大容量:50MB</p>
    <div class="flex justify-center ">
        <p class="text-2xl">用途</p>
        <p class="text-2xl">デジタルデータのプレゼントに</p>
        <p class="text-2xl">VRChatterの日々の贈り物に</p>
    </div>
</div>

<div class="scroll-area flex justify-center ">
    <p class="text-2xl">製作者Twitter:@usuyuki26</p>
    <p class="text-2xl">個人開発である点、ご了承ください。</p>

</div>

<div class="scroll-area">
    <p class="text-2xl yokogaki">copyright 2022 usuyuki</p>

</div>


{{-- <script type="text/javascript" src="{{ asset('js/topPerticle.js') }}"></script> --}}

@endsection
