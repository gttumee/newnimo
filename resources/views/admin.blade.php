@extends('layout.common')
@include('layout.head')
<button type="submit" class="btn btn-primary px-4 mx-auto my-2"  name="service" value="37">サービス一覧</button>
<button type="submit" class="btn btn-primary px-4 mx-auto my-2"  name="service" value="37">対応作業</button>
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
        </tr>
      </thead>
      <tbody>
        @foreach ($alljob as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->title}} </td>
          <td>{{$item->image1}} </td>
          <td>{{$item->content1}}</td>
          <td>{{$item->image2}} </td>
          <td>{{$item->content2}} </td>
          <td>{{$item->image3}}</td>
          <td>{{$item->image4}} </td>
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