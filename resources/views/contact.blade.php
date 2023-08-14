@extends('layout.common')
 
@section('title', '問い合わせ')
@section('description', '問い合わせ')
@include('layout.head')
@include('layout.header')
@section('content')
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">問い合わせ</span></p>
            <h1 class="mb-4">ご質問がございましたらお問い合わせください</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    @if (session('flash_message'))
                    <div class="p-3 mb-2 bg-primary text-white">
                        {{ session('flash_message') }}
                    </div>
                @endif
                    <div id="success"></div>
                    <form method="get" action="{{route('contact')}}">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="お名前" required="required" data-validation-required-message="お名前入力してください。" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレス" required="required" data-validation-required-message="メールアドレスを入力してください。" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="phone" placeholder="電話番号" required="required" data-validation-required-message="お電話番号を入力してください。" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" name="text" placeholder="メッセージ" required="required" data-validation-required-message="メッセージを入力してください。"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">送信</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="d-flex">
                    <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>住所</h5>
                        <p>兵庫県神戸市兵庫区荒田町3丁目14-7-301</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>メール</h5>
                        <p>nimo@mtche.jp</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>電話番号</h5>
                        <p>080-6102-3347</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>営業時間</h5>
                        <strong>月～金、祝日を除く</strong>
                        <p class="m-0">9時00分～18時00分 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection 
@include('layout.footer')