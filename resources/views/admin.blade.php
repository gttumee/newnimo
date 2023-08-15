@extends('layout.common')
@include('layout.head')
<div class="container-fluid pt-5">
  <div class="container">
    <a href="{{route('index')}}" class="btn btn-primary py-2 px-4">ホーム戻り</a>
      <div class="text-center pb-2">
          <p class="section-title px-5"><span class="px-2">作業依頼</span></p>
          <h1 class="mb-4">頑張りましたね！！</h1> 
      </div>
      <div class="row justify-content-md-center">
          <div class="col-lg-6 mb-5 text-center">
              <div class="contact-form">
                  @if (session('flash_message'))
                  <div class="p-3 mb-2 bg-primary text-white">
                      {{ session('flash_message') }}
                  </div>
                  @endif
                  <form method="post" action="{{route('nimokun')}}" enctype="multipart/form-data">
                    @csrf
                  <div id="success"></div>
                  <form name="sentMessage" id="contactForm" novalidate="novalidate">
                      <div class="control-group">
                          <input type="text" class="form-control" id="name" placeholder="作業名" name="title" required="required" data-validation-required-message="作業名を入力してください。" />
                          <p class="help-block text-danger"></p>
                      </div>
                      <div class="control-group">
                        一番綺麗な画像をアップロードしてください。
                          <input type="file" class="form-control" name="image" id="image" />
                          <p class="help-block text-danger"></p>
                      </div>
                      <div class="control-group">
                        <textarea class="form-control" rows="6" id="message" placeholder="作業内容" name="jobtext" required="required" data-validation-required-message="作業内容を入力してください。"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                      作業前の画像をアップロードしてください。
                      <input type="file" class="form-control" name="beforeimage" />
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                      作業前の画像をアップロードしてください。
                      <input type="file" class="form-control" name="afterimage" />
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="email" placeholder="その他" name="other" required="required" data-validation-required-message="その他を入力してください。" />
                        <p class="help-block text-danger"></p>
                    </div>
                     
                      <div>
                          <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">保存</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
   <table class="table table-bordered border-primary">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">作業名</th>
          <th scope="col">一番綺麗な画像</th>
          <th scope="col">作業内容</th>
          <th scope="col">画像実施前</th>
          <th scope="col">作業内容</th>
          <th scope="col">画像実施後</th>
          <th scope="col">画像</th>
          <th scope="col">削除</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($alljob as $item)
        <form method="post" action="{{route('nimokun')}}" enctype="multipart/form-data">
          @csrf
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->title}} </td>
          <td>{{$item->image1}} </td>
          <td>{{$item->content1}}</td>
          <td>{{$item->image2}} </td>
          <td>{{$item->content2}} </td>
          <td>{{$item->image3}}</td>
          <td>{{$item->image4}} </td>
          <td><button type="submit" class="btn btn-primary py-2 px-4" name="delete" value="{{$item->id}}">削除</button> </td>
        </tr>
        @endforeach
      </tbody>
  </table>

<!-- Blog End -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>