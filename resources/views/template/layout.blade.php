<!DOCTYPE html>
<html lang="en">
<head>
    <title>INSPEKTORAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/open-iconic-bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">

    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">

    <link rel="stylesheet" href="{{ asset("css/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("css/ionicons.min.css") }}">

    <link rel="stylesheet" href="{{ asset("css/bootstrap-datepicker.css") }}">
    <link rel="stylesheet" href="{{ asset("css/jquery.timepicker.css") }}">


    <link rel="stylesheet" href="{{ asset("css/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("css/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <style>
        .garis {
            border-radius: 5px;
            border: 2px ;
            padding: 20px;
            background: #D3D3D3;
        }
        .cari{
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
            float: right;
        }
        .cari:focus{
            width: 20%;
        }
        .warnanav{
            background-color:cornflowerblue;
        }
    </style>
    @yield('css')
</head>
<body class="dasar">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <div class="row m-auto">
                <div class="col-12 w-100 text-center">
                    <a class="navbar-brand w-100" href="{{ route('home') }}">INSPEKTORAT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="oi oi-menu"></span>
                </button>
                </div>
                <div class="col-12 w-100">
                        <form >
                            <input class="cari" type="text" name="search" placeholder="Search..">
                        </form>
                </div>
                <div class="col-12 w-100 text-center">
                    <div class="collapse navbar-collapse" id="ftco-nav">
                  <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">BERANDA</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      TENTANG KAMI
                    </a>
                    <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('kondisi') }}">Kondisi Umum</a>
                    <a class="dropdown-item" href="{{ route('rencana') }}">Rencana Strategis Inspektorat</a>
                    <a class="dropdown-item" href="{{ route('sambutan') }}">Sambutan</a>
                    <a class="dropdown-item" href="{{ route('tugas') }}">Tugas dan Fungsi</a>
                    <a class="dropdown-item" href="{{ route('visi') }}">Visi dan Misi</a>
                    <a class="dropdown-item" href="{{ route('data') }}">Data Jumlah Temuan</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      INFORMASI
                    </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('berita') }}">Berita</a>
                      <a class="dropdown-item" href="{{ route('agenda') }}">Agenda</a>
                      <a class="dropdown-item" href="{{ route('artikel') }}">Artikel</a>
                      <a class="dropdown-item" href="{{ route('pengumuman') }}">Pengumuman</a>
                      </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('transparan') }}" class="nav-link">TRANSPARANSI</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      GALERI
                    </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('foto') }}">Foto</a>
                      <a class="dropdown-item" href="{{ route('video') }}">Video</a>
                      </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('download') }}" class="nav-link">DOWNLOAD</a></li>
                    <li class="nav-item"><a href="{{ route('situs') }}" class="nav-link">SITUS TERKAIT</a></li>
                    <li class="nav-item"><a href="{{ route('kontak') }}" class="nav-link">KONTAK KAMI</a></li>
                  </ul>
                </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('header')
    <div class="main-panel">
        <main role="main" class="content-wrapper">
            <section class="ftco-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 ftco-animate ">
                            {{-- <div class="row garis"> --}}
                                <h1>@yield('judul')</h1>
                                @yield('content')
                            {{-- </div><br> --}}
                            {{-- <div class="row garis">
                                <h1>@yield('judul1')</h1>
                                @yield('content1')
                            </div> col-md8 --}}
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar-box ftco-animate garis">
                                <h3 class="heading-2">Artikel</h3>
                                <div class="block-21 mb-4 d-flex">
                                  <a class="blog-img mr-4" ><img src="{{ asset("images/n1.jpg") }}" class="d-block w-100" alt="..."></a>
                                  <div class="text">
                                    <h3 class="heading"><a href="#">Semoga ada kabar baik hari ini </a></h3>
                                    <div class="meta">
                                      <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="block-21 mb-4 d-flex">
                                  <a class="blog-img mr-4" ><img src="{{ asset("images/n2.jpg") }}" class="d-block w-100" alt="..."></a>
                                  <div class="text">
                                    <h3 class="heading"><a href="#">Bukannya tidak ingin berbagi, hanya takut membebani </a></h3>
                                    <div class="meta">
                                      <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="block-21 mb-4 d-flex">
                                  <a class="blog-img mr-4" ><img src="{{ asset("images/n3.jpg") }}" class="d-block w-100" alt="..."></a>
                                  <div class="text">
                                    <h3 class="heading"><a href="#">Jangan mudah tersinggung, di bumi bukan cuma kamu yang punya perasaan.</a></h3>
                                    <div class="meta">
                                      <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="sidebar-box ftco-animate garis">
                              <h3 class="heading-2">Pengaduan</h3>
                              <div class="block-21 mb-4 d-flex">
                                <div class="text">
                                  <h3 class="heading"><a href="#">Semoga ada kabar baik hari ini </a></h3>
                                  <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                                  </div>
                                </div>
                              </div>
                              <div class="block-21 mb-4 d-flex">
                                <div class="text">
                                  <h3 class="heading"><a href="#">Bukannya tidak ingin berbagi, hanya takut membebani </a></h3>
                                  <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                                  </div>
                                </div>
                              </div>
                              <div class="block-21 mb-4 d-flex">
                                <div class="text">
                                  <h3 class="heading"><a href="#">Jangan mudah tersinggung, di bumi bukan cuma kamu yang punya perasaan.</a></h3>
                                  <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept. 25, 2019</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        </div>{{-- </div> sidebar --}}
                    </div>
                </div>
            </section>
            <section>
            @yield('situs')
            </section>

        </main>
    </div>
    <footer class="ftco-footer ftco-section bg-light" >
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                      <div class="footer-info">
                        <h3>INSPEKTORAT</h3>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                          <li><a href="#">Beranda</a></li>
                          <li><a href="#">Berita</a></li>
                          <li><a href="#">Artikel</a></li>
                          <li><a href="#">Transparansi</a></li>
                          <li><a href="#">Download</a></li>
                          <li><a href="#">Kontak kami</a></li>
                        </ul>
                      </div>


                    </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="footer-links">
                        <h4>Contact Us</h4>
                        <p>
                          Jl. Dahlia No. 9 RT 04 Kel.<br>
                          Bugis, Kec. Samarinda Kota<br>
                          Kalimantan Timur <br>
                          <strong>Phone:</strong> (0541) 741003<br>
                        </p>
                      </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>2020</strong>.
          </div>
        </div>
      </footer>

    @yield('js')
    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <script src="{{ asset("js/jquery-migrate-3.0.1.min.js") }}"></script>
    <script src="{{ asset("js/popper.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/jquery.easing.1.3.js") }}"></script>
    <script src="{{ asset("js/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset("js/jquery.stellar.min.js") }}"></script>
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("js/aos.js") }}"></script>
    <script src="{{ asset("js/jquery.animateNumber.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap-datepicker.js") }}"></script>
    <script src="{{ asset("js/jquery.timepicker.min.js") }}"></script>
    <script src="{{ asset("js/scrollax.min.js") }}"></script>
    <script src="{{ asset("js/google-map.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
    <script src="{{ asset("js/carousel.js") }}"></script>
</body>
</html>
