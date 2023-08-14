@extends('layout.common')
@section('title', 'サービス')
@section('description', 'サービス')
@include('layout.head')
@include('layout.header')
@section('content')
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">作業依頼</span></p>
            <h1 class="mb-4">{{$getServiceInfo->name}}</h1> 
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-6 mb-5 text-center">
                <div class="contact-form">
                    @if (session('flash_message'))
                    <div class="p-3 mb-2 bg-primary text-white">
                        {{ session('flash_message') }}
                    </div>
                    @endif
                    <form method="get" action="{{route('workRequest')}}">
                        @csrf
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <input type="hidden" class="form-control" name="work" value="{{$getServiceInfo->name}}">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="お名前" name="name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="メール" name="mail" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="電話番号" name="phone" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="住所" name="address" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="ご依頼内容" name="message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">依頼する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection 
@include('layout.footer')