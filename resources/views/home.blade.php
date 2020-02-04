@extends('template.layout')
@section('css')
    <style>
        .garis {
            border-radius: 5px;
            border: 2px ;
            padding: 20px;
            background: #D3D3D3;
        }
    </style>
@endsection
@section('header')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset("images/0.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset("images/1.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset("images/2.jpg") }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
@section('content')
<div class="row garis">
    <h1>BERITA</h1>
<div class="col-md-12 d-flex ftco-animate">
    <div class="blog-entry blog-entry-2 justify-content-end d-md-flex w-100">
    <a href="blog-single.html" class="block-20">
      <img src="{{ asset("images/3.jpg") }}" class="d-block w-100" alt="...">
    </a>
    <div class="text pl-md-4 ml-md-2 pt-4">
        <div class="meta">
        <div><a href="#">Sept. 28, 2019</a></div>
        <div><a href="#">Admin</a></div>
        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
      </div>
      <h3 class="heading mt-2"><a href="#">NANTI KITA CERITA TENTANG HARI INI </a></h3>
      <p>Suatu hari senang datang, nikmati saja. Tapi suatu hari sedih akan lebih berkesan, nikmati saja.</p>
      <p><a href="{{ route('content1') }}" class="btn btn-warning">Detail</a></p>
    </div>
  </div>
</div>
<div class="col-md-12 d-flex ftco-animate">
    <div class="blog-entry blog-entry-2 justify-content-end d-md-flex w-100">
    <a href="blog-single.html" class="block-20">
      <img src="{{ asset("images/3.jpg") }}" class="d-block w-100" alt="...">
    </a>
    <div class="text pl-md-4 ml-md-2 pt-4">
        <div class="meta">
        <div><a href="#">Sept. 28, 2019</a></div>
        <div><a href="#">Admin</a></div>
        <div><a href="#" class="meta -chat"><span class="icon-chat"></span> 3</a></div>
      </div>
      <h3 class="heading mt-2"><a href="#">KAMU TERLALU BANYAK BERCANDA</a></h3>
      <p>Semoga kita masih punya waktu bercanda, ditengah repotnya hidup kita.</p>
      <p><a href="#" class="btn btn-warning">Detail</a></p>
    </div>
  </div>
</div>
</div><br>

@endsection

@section('situs')
<div class="container">
<div class="row garis">
        <div class="col-md-12 d-flex ftco-animate">
            <div class="loop owl-carousel">
              <div class="item">
                <a href="#"><img src="{{ asset("images/n3.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{ asset("images/n1.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{ asset("images/n2.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{ asset("images/n4.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{ asset("images/n5.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{ asset("images/n6.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{ asset("images/n3.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
              <div class="item">
                <a href="#"><img src="{{ asset("images/n2.jpg") }}" class="d-block w-100" alt="..."></a>
              </div>
            </div>
        </div>
    </div>
    </div><br>
    @endsection