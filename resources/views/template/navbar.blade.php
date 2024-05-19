<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <h1 class="text-light"><a href="index.html"><span>Ambangah</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a <?php if ($current_page == '/') echo 'class="active"'; ?> href="/">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a <?php if ($current_page == 'tentangkami') echo 'class="active"'; ?> href="tentangkami">Tentang Kami</a></li>
            <li><a <?php if ($current_page == 'visimisi') echo 'class="active"'; ?> href="visimisi">Visi Misi</a></li>
            <li><a <?php if ($current_page == 'sejarah') echo 'class="active"'; ?> href="sejarah">Sejarah Desa</a></li>
            <li><a <?php if ($current_page == 'geografis') echo 'class="active"'; ?> href="geografis">Geografis Desa</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Pemerintahan Desa</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a <?php if ($current_page == 'struktur') echo 'class="active"'; ?> href="struktur">Struktur Organisasi</a></li>
            <li><a <?php if ($current_page == 'lembaga') echo 'class="active"'; ?> href="{{{ route('index.lembaga') }}}">Lembaga Desa</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a <?php if ($current_page == 'berita') echo 'class="active"'; ?> href="{{route('index.berita')}}">Berita Desa</a></li>
            <li><a <?php if ($current_page == 'agenda') echo 'class="active"'; ?> href="agenda">Agenda Kegiatan</a></li>
          </ul>
        </li>
        @if(Auth::check())
    <!-- Menu untuk pengguna yang sudah login -->
    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
    <li><a <?php if ($current_page == 'admin') echo 'class="active"'; ?> href="admin">Dashboard</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
    <li><a <?php if ($current_page == 'register') echo 'class="active"'; ?> href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
      
  </form>
          </ul>
        </li>
        
@else
    <!-- Menu untuk pengguna yang belum login -->
    <li class="dropdown"><a href="#"><span>Masuk</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
    <li><a <?php if ($current_page == 'login') echo 'class="active"'; ?> href="login">Login</a></li>
    <li><a <?php if ($current_page == 'register') echo 'class="active"'; ?> href="register">Register</a></li>
@endif
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->