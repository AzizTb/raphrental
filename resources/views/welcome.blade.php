@extends('user.layouts.master')

@section('main_content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img class="w-100" src="{{asset('img/1.1.jpeg')}}">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
              <p class="animate__animated animate__fadeInUp">Tempat Kami Menyediakan Banyak Pilihan Mobil Yang Anda Butuhkan</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img class="w-100" src="{{asset('img/1.6.jpg')}}">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Rental Mobil</h2>
              <p class="animate__animated animate__fadeInUp">Tempat Kami Mempunyai Harga Yang Relatif Pas Di Dompet</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

          <div class="row content">
            <div class="col-lg-6">
              <h2>Keunggulan Rental Mobil Kami</h2>
          </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                Rental mobil kami memiliki banyak jenis mobil yang menarik bagi anda, terlebih lagi jika anda ingin berpergian dengan mobil bergaya, mobil keluarga, dll.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Jenis Mobil Banyak</li>
                <li><i class="ri-check-double-line"></i> Harga Terjangkau</li>
                <li><i class="ri-check-double-line"></i> Syarat Untuk Rental Mudah</li>
              </ul>
              <p class="fst-italic">
                Rental Mobil Kami Tersedia Di Bandung
              </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">

          <div class="row">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>

          </div>

        </div>
      </section>
      <!-- End Clients Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="row">
            <div class="col-md-6">
              <div class="icon-box">
                <i class="bi bi-briefcase"></i>
                <h4><a href="#">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-card-checklist"></i>
                <h4><a href="#">Dolor Sitema</a></h4>
                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-bar-chart"></i>
                <h4><a href="#">Sed ut perspiciatis</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-binoculars"></i>
                <h4><a href="#">Nemo Enim</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-brightness-high"></i>
                <h4><a href="#">Magni Dolore</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-calendar4-week"></i>
                <h4><a href="#">Eiusmod Tempor</a></h4>
                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- End Services Section -->
@endsection
