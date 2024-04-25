@extends('template.main')

@section('content')
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Desa Ambangah</span></h2>
        <p class="animate__animated animate__fadeInUp">Desa Sungai Ambangah merupakan Desa yang  berada didalam wilayah Kecamatan Sungai Raya, Kabupaten Kubu Raya, yang terdiri dari 5 (lima) Dusun, Dusun Mekar Sari, Dusun Kampung Baru, Dusun Karya Sari, Dusun Karya Desa dan Dusun Kumpai.</p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Baca Selengkapnya ...</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Sungai Ambangah</h2>
        <p class="animate__animated animate__fadeInUp">Sungai Ambangah, sungai ini adalah sungai pembatas antara Desa Sungai Ambangah dengan Desa Madu Sari pada beberapa tahun yang lalu sungai ini sebagai jalur utama  bagi masyarakat Desa Sungai  Ambangah, baik itu untuk anak-anak pergi berangkat sekolah maupun untuk masyarakat  pergi bekerja  ke Kota Pontianak, dan sungai ini juga merupakan salah satu sejarah terbentuknya Desa Sungai Ambangah.</p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Baca Selengkapnya ...</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->
<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="services">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><i class="bx bx-male"></i></div>
            <h4 class="title"><a href="">Laki-Laki</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bx-female"></i></div>
            <h4 class="title"><a href="">Perempuan</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-green">
            <div class="icon"><i class="bx bx-child"></i></div>
            <h4 class="title"><a href="">Balita</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-blue">
            <div class="icon"><i class="bx bx-calculator"></i></div>
            <h4 class="title"><a href="">Total</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="assets/img/ambangah.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=yTXkU0DrcSU&t=16s&pp=ygUUZGVzYSBzdW5nYWkgYW1iYW5nYWg%3D" target="_blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx bx-home"></i></div>
            <h4 class="title"><a href="">Desa Sungai Ambangah</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi numquam ut consequuntur, possimus doloremque a aperiam deleniti necessitatibus voluptatem beatae laborum dolorem, voluptates ipsam quaerat enim assumenda! Repudiandae, veritatis.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">

      <div class="section-title">
        <h2>Artikel</h2>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="assets/img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3>Kades Sungai Ambangah Bantah Ijazah Palsu.</h3>
          <p class="fst-italic">
            KBRN, Pontianak: Kepala Desa Sungai Ambangah, Kecamatan Sungai Raya, Kabupaten Kubu Raya, Samsuri menegaskan, bahwa ijazah Sekolah Dasar (SD) miliknya tidaklah palsu. 
          </p>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="assets/img/features-2.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Kades Sungai Ambangah Bantah Ijazah Palsu.</h3>
          <p class="fst-italic">
            KBRN, Pontianak: Kepala Desa Sungai Ambangah, Kecamatan Sungai Raya, Kabupaten Kubu Raya, Samsuri menegaskan, bahwa ijazah Sekolah Dasar (SD) miliknya tidaklah palsu. 
          </p>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="assets/img/features-3.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5">
          <h3>Kades Sungai Ambangah Bantah Ijazah Palsu.</h3>
          <p> KBRN, Pontianak: Kepala Desa Sungai Ambangah, Kecamatan Sungai Raya, Kabupaten Kubu Raya, Samsuri menegaskan, bahwa ijazah Sekolah Dasar (SD) miliknya tidaklah palsu. </p>
        </div>
      </div>


    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->
@endsection