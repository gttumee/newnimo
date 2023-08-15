@extends('layout.common')
@section('title', '実績ご紹介')
@section('description', '実績ご紹介')
@include('layout.head')
@include('layout.header')
@section('content')
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
                        <img class="card-img-top mb-2" src="img/{{$item->image1}}"  width="193" height="300"alt="">
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
<div class="mx-auto" style="width: 200px;">
    {{ $alljob->links('pagination::bootstrap-4') }}
  </div>
<!-- Blog End -->
@endsection 
@include('layout.footer')