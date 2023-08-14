@section('header')
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="{{route('index')}}" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-primary">ニモ君</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{route('index')}}" class="nav-item nav-link" id="menu">ホーム</a>
                    <a href="{{route('about')}}" class="nav-item nav-link" id="menu">私たちは</a>
                    <a href="{{route('service')}}" class="nav-item nav-link">サービス一覧</a>
                    <a href="{{route('job')}}" class="nav-item nav-link">実績ご紹介</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">問い合わせ</a>
                </div>
                <form method="get" action="{{route('work')}}">
                    @csrf
                    <button type="submit" class="btn btn-primary px-4 mx-auto my-2"  name="service" value="37">他の作業依頼する</button>
                </form>
            </div>
        </nav>
    </div>
    @endsection