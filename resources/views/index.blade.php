@extends('layout.common')
@section('title', 'ホーム')
@section('description', 'ホーム')
@section('pageCss')
<link href="/css/page.css" rel="stylesheet">
@endsection 
@include('layout.head')
@include('layout.header')

@section('content')
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0"></h4>
            <h1 class="display-3 font-weight-bold text-white">神戸・大阪・京都</h1>
            <p class="text-white mb-4">ゴミ屋敷清掃や不用品回収、
                ハウスクリーニングならNIMOにおまかせください！</p>
            <a href="{{route('service')}}" class="btn btn-secondary mt-1 py-3 px-5">サービス一覧</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <img class="img-fluid mt-2" src="img/head.png" alt="">
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
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
<!-- About End -->

<!-- Class Start -->
<selection id="service">
    <div class="container-fluid pt-5">
        <div class="container">
            <form method="get" action="{{route('work')}}">
                @csrf
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">NIMOにおまかせください！</span></p>
                <h1 class="mb-4">サービス一覧</h1>
            </div>
            <div class="row">
                @foreach ($allservice as $item)
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/{{$item->image}}.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$item->name}}</h4>
                            <p class="card-text">{{$item->content}}</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>作業時間</strong></div>
                                <div class="col-6 py-1">{{$item->time}}</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>料金</strong></div>
                                <div class="col-6 py-1">{{$item->price}}</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 mx-auto my-2"  name="service" value="{{$item->id}}">サービを依頼する</button>
                    </div>
                </div>
                @endforeach
            </div>
            </form>
        </div>
    </div>
</selection>
<!-- Blog Start -->
<selection id="Acknowledged">
    <div class="container-fluid pt-5">
        <div class="container">
            <form method="get" action="{{route('jobDetail')}}">
                @csrf
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">最新情報</span></p>
                <h1 class="mb-4">対応済みの作業</h1>
            </div>
            <div class="row pb-3">
                @foreach ($alljob as $item)
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/{{$item->image1}}.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">{{$item->title}}</h4>
                            <p>{{$item->content1}}</p>
                            <button type="submit" class="btn btn-primary px-4 mx-auto my-2"  name="job" value="{{$item->id}}">もっと見る</button>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </form>
            </div>
        </div>
    </div>
</selection>
<!-- Blog End -->
@endsection 
@include('layout.footer')