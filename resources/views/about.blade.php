@extends('template.main')

@section('content')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tentang Kami</h2>
          <ol>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li>Tentang Kami</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/tentang.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3 class="fst-italic">Website desa merupakan serana digital dimana masyarakat bisa melihat kegiatan yang dilakukan oleh desa sebagai wujud transparansi.</h3>
           
          
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Dusun</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>RT/RW</p>
          </div>



        </div>

      </div>
    </section><!-- End Facts Section -->


   
  </main><!-- End #main -->

@endsection