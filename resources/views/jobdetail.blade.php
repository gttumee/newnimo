@extends('layout.common')
@section('title', '実績ご紹介')
@section('description', '実績ご紹介')
@include('layout.head')
@include('layout.header')
@section('content')
<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-12">
            <div class="d-flex flex-column text-left mb-3">
                <p class="section-title pr-5"><span class="pr-2">最新情報</span></p>
                <h1 class="mb-3">{{$alljob->title}}</h1>
                <div class="d-flex">
                    <p class="mr-3"><i class="fa fa-user text-primary"></i>担当者</p>
                </div>
            </div>
            <div class="mb-5">
                <img class="img-fluid rounded w-100 mb-4" src="img/{{$alljob->image1}}.jpg" alt="Image">
                <p>{{$alljob->content1}}</p>
                <h2 class="mb-4">作業前</h2>
                <img class="img-fluid rounded w-100 mb-4" src="img/{{$alljob->image2}}.jpg" alt="Image">
                <p>{{$alljob->content1}}</p>
                <h3 class="mb-4">作業後</h3>
                <img class="img-fluid rounded w-100 mb-4" src="img/{{$alljob->image3}}.jpg" alt="Image">
                <p>{{$alljob->content1}}</p>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection 
@include('layout.footer')