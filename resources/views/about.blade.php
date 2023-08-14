@extends('layout.common')
@section('title', 'ホーム')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@include('layout.head')
@include('layout.header')
@section('content')
<selection id="about">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">私たちは</span></p>
                    <h1 class="mb-4">お客さまの要望をしっかりヒアリングします。</h1>
                    <p>NIMOのハウスクリーニングは、サービス実施前にお客さまの要望をしっかりヒアリングし、見積もりにご納得いただいてから作業を開始します。
                        気になっている汚れやお悩みなどがございましたら、どんな些細なことでもお気軽にお声掛けください。
                        不用品回収・買取も同時に実施することができるので、断捨離しながら自宅を徹底的にキレイにしたい方に選ばれています。大掃除はもちろん、月に 1
                        回や半年に１回など、定期的な利用も大歓迎です。
                    </p>
                </div>
            </div>
        </div>
    </div>
</selection>
<!-- Blog End -->
@endsection 
@include('layout.footer')