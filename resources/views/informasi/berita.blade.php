@extends('template.layout')
@section('content')
<div class="row garis">
    <h1>BERITA</h1>
<div class="container">
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
</div>
</div>
@endsection
