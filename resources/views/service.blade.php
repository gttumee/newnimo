@extends('layout.common')
@section('title', 'サービス')
@section('description', 'サービス')
@include('layout.head')
@include('layout.header')
@section('content')
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
<!-- Blog End -->
@endsection 
@include('layout.footer')