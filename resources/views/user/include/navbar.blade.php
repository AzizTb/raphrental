<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">Rental Mobil</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <a href="/RentalMobil/beranda" class="text-sm text-gray-700 dark:text-gray-500 underline">Beranda</a>
            @auth
            <a href="/RentalMobil/mobiluser" class="text-sm text-gray-700 dark:text-gray-500 underline">Mobil</a>
            <a href="/RentalMobil/driveruser" class="text-sm text-gray-700 dark:text-gray-500 underline">Driver</a>
            {{-- <a href="/RentalMobil/sewa" class="text-sm text-gray-700 dark:text-gray-500 underline">Sewa</a> --}}
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toogle" id="navbarDropdown" role="button"
                data-bs-toogle="dropdown" aria-expanded="false">
                     {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <form action="keluar" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"> Logout </button>
                        </form>
                    </li>
                </ul>
             </li>
        </ul>
            @else
            <a href="masuk" class="text-sm text-gray-700 dark:text-gray-500 underline">Masuk</a>
            <a href="registrasi" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrasi</a>
        @endauth

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
