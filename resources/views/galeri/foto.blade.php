@extends('template.layout')
@section('content')
<div class="row garis">
    <h1>FOTO</h1>
<div class="container">
    <div class="row">
        <div class="col-md-3 ftco-animate">
            <a href="{{ asset("images/n1.jpg") }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset("images/n2.jpg") }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
            </div>
            </a>
        </div>
        <div class="col-md-3 ftco-animate">
            <a href="{{ asset("images/n2.jpg") }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset("images/n3.jpg") }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
            </div>
            </a>
        </div>
        <div class="col-md-3 ftco-animate">
            <a href="{{ asset("images/n3.jpg") }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset("images/n4.jpg") }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
            </div>
            </a>
        </div>
        <div class="col-md-3 ftco-animate">
            <a href="{{ asset("images/n4.jpg") }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset("images/n1.jpg") }});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
            </div>
            </a>
        </div>
</div>
</div>
</div>
@endsection
