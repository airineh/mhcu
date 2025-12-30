<!DOCTYPE html>
<html lang="zxx">
    <head>

        <!-- ** Basic Page Needs ** -->
        <meta charset="utf-8">
        <title>MHCU RS SOEHARTO HEERDJAN</title>

        <!-- ** Mobile Specific Metas ** -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Medical HTML Template">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        <meta name="author" content="Themefisher">
        <meta name="generator" content="Themefisher Medical HTML Template v1.0">

        <!-- theme meta -->
        <meta name="theme-name" content="medic"/>

        <!-- ** Plugins Needed for the Project ** -->
        <!-- bootstrap -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">

        <!-- FancyBox -->
        <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
        <!-- fontawesome -->
        <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
        <!-- animate.css -->
        <link rel="stylesheet" href="plugins/animation/animate.min.css">
        <!-- jquery-ui -->
        <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
        <!-- timePicker -->
        <link rel="stylesheet" href="plugins/timePicker/timePicker.css">

        <!-- Stylesheets -->
        <link href="css/style.css" rel="stylesheet">

        <!--Favicon-->
        <link rel="icon" href="images/mini_logo.png" type="image/x-icon">

    </head>

    <body>
        <div class="page-wrapper">

            <!--header top-->
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="top-left text-center text-md-left">
                                 <h6>Jam Pelayanan: Senin - Jumat | 08.00-16.00 WIB</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-right text-center text-md-right">
                                <ul class="social-links">
                                    <li>
                                        <a
                                            href="https://www.facebook.com/rsjiwa.drsoehartoheerdjan/"
                                            aria-label="facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.tiktok.com/@rssh.id" aria-label="tiktok">
                                            <i class="fab fa-tiktok"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@rs_soehartoheerdjan" aria-label="youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.instagram.com/rs_soehartoheerdjan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                            aria-label="instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top-->

            <!--Header Upper-->
            <section class="header-uper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-3">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img loading="lazy" class="img-fluid" src="images/logo_rsj.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9">
                            <div class="right-side">
                                <ul class="contact-info pl-0 mb-4 mb-md-0">
                                    <li class="item text-left">
                                        <div class="icon-box">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <strong>Email</strong>
                                        <br>
                                        <a href="mailto:mhcu.grogol@gmail.com">
                                            <span>mhcu.grogol@gmail.com
                                            </span>
                                        </a>
                                    </li>
                                    <li class="item text-left">
                                        <div class="icon-box">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <strong>Call Now</strong>
                                        <br>
                                        <span>+62 812-1813-9323 (Hanya Chat)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Header Upper-->

            <!--Main Header-->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarLinks"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarLinks">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                            </li>
                            <li class="nav-item @@about">
                                <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item @@service">
                                <a class="nav-link" href="{{ route('service') }}">Layanan</a>
                            </li>
                            <li class="nav-item @@gallery">
                                <a class="nav-link" href="{{ route('gallery') }}">Galeri</a>
                            </li>
                            <li class="nav-item @@team">
                                <a class="nav-link" href="{{ route('team') }}">Tim</a>
                            </li>
                            <li class="nav-item @@appointment">
                                <a class="nav-link" href="{{ route('appointments.stats') }}">Kunjungan</a>
                            </li>
                            <li class="nav-item @@contact">
                                <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--End Main Header -->

            <!--Page Title-->
            <section
                class="page-title text-center"
                style="background-image:url(images/mhcu/pemeriksaanhrv.jpg);">
                <div class="container">
                    <div class="title-text">
                        <h1>Kunjungan</h1>
                        <ul class="title-menu clearfix">
                            <li>
                                <a href="{{ url('/') }}">Beranda &nbsp;/</a>
                            </li>
                            <li>Kunjungan</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <!-- Section -->
            <!-- Statistik MHCU -->
            <section class="section style-three">
                <div class="container">
                    <div class="section-title text-center mb-5">
                        <h3>
                            <span>Pendaftaran MHCU</span></h3>
                        <p class="text-muted">Data jumlah pasien yang telah mendaftar layanan MHCU
                            berdasarkan tanggal pendaftaran.</p>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Jumlah Pasien</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $row)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($row->tanggal)->format('d M Y') }}</td>
                                    <td>{{ $row->total }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center">Belum ada data pendaftaran MHCU</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- End Statistik MHCU -->
            <!-- Statistik Per Layanan -->
            <section class="section style-three mt-5">
                <div class="container">
                    <div class="section-title text-center mb-5">
                        <h3>
                            <span>Data Pasien Berdasarkan Layanan</span></h3>
                        <p class="text-muted">Jumlah pasien yang mendaftar setiap jenis layanan MHCU.</p>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>Layanan</th>
                                    <th>Jumlah Pasien</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($serviceData as $service)
                                <tr>
                                    <td>{{ $service->layanan }}</td>
                                    <td>{{ $service->jumlah }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2">Belum ada data layanan</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- End Statistik Layanan -->

            <!-- End Section -->

            <!--team section-->
            <section class="team-section section">
                <div class="container">
                    <div class="section-title text-center">
                        <h3>Our Expert
                            <span>Psychologist</span></h3>
                    </div>

                    <div class="psychologist-slider">

                        <!-- 1 -->
                        <div class="team-member item">
                            <img
                                loading="lazy"
                                src="images/mhcu team/Medwin.jpg"
                                alt="doctor"
                                class="img-fluid">
                            <div class="contents text-center">
                                <h4>Medwin WIsnu Prabowo, M.Psi., Psikolog, CH., CHt.</h4>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="team-member item">
                            <img
                                loading="lazy"
                                src="images/mhcu team/Labbaika.jpg"
                                alt="doctor"
                                class="img-fluid">
                            <div class="contents text-center">
                                <h4>Labbaika Fadillah, M.Psi., Psikolog</h4>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="team-member item">
                            <img
                                loading="lazy"
                                src="images/mhcu team/Hernita.jpg"
                                alt="doctor"
                                class="img-fluid">
                            <div class="contents text-center">
                                <h4>Hernita Wijayaratna, M.Psi., Psikolog</h4>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="team-member item">
                            <img
                                loading="lazy"
                                src="images/mhcu team/Muhajirah.jpg"
                                alt="doctor"
                                class="img-fluid">
                            <div class="contents text-center">
                                <h4>Muhajirah Annisai, M.Psi., Psikolog</h4>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="team-member item">
                            <img
                                loading="lazy"
                                src="images/mhcu team/Silviani.jpg"
                                alt="doctor"
                                class="img-fluid">
                            <div class="contents text-center">
                                <h4>Silviani, M.Psi., Psikolog</h4>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="team-member item">
                            <img
                                loading="lazy"
                                src="images/mhcu team/Ayu.jpg"
                                alt="doctor"
                                class="img-fluid">
                            <div class="contents text-center">
                                <h4>Ayu Noviyanti, M.Psi., Psikolog</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--End team section-->

            <!--footer-main-->
            <footer class="footer-main">
                <div class="footer-top">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="index.html">
                                                <img
                                                    loading="lazy"
                                                    class="img-fluid"
                                                    src="images/logo_rssh-removebg.png"
                                                    alt="medic">
                                            </a>
                                        </figure>
                                    </div>
                                    <p>Layanan pemeriksaan kesehatan mental modern dan terpercaya.</p>
                                    <ul class="location-link">
                                        <li class="item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p>Jl. Prof. Dr. Latumeten No.1, RT.1/RW.4, Jelambar, Kec. Grogol petamburan,
                                                Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11460</p>
                                        </li>
                                        <li class="item">
                                            <i class="far fa-envelope" aria-hidden="true"></i>
                                            <a href="mailto:mhcu.grogol@gmail.com">
                                                <p>mhcu.grogol@gmail.com</p>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <i class="fas fa-phone" aria-hidden="true"></i>
                                            <p>+62 812-1813-9323 (Hanya Chat)</p>
                                        </li>
                                    </ul>
                                    <ul class="list-inline social-icons">
                                        <li class="list-inline-item">
                                            <a
                                                href="https://www.facebook.com/rsjiwa.drsoehartoheerdjan/"
                                                aria-label="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a href="https://www.tiktok.com/@rssh.id" aria-label="tiktok">
                                                <i class="fab fa-tiktok"></i>
                                            </a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a href="https://www.instagram.com/rs_soehartoheerdjan" aria-label="instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a href="https://www.youtube.com/@rs_soehartoheerdjan" aria-label="youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                                <h2>Layanan</h2>
                                <ul class="menu-link">

                                    <li>
                                        <a href="{{ url('/service') }}">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Pemeriksaan Rohani, Jasmani dan Bebas NAPZA
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/service') }}">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Pemeriksaan HRV Test
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/service') }}">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Pemeriksaan IQ & Minat Bakat
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/service') }}">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Konseling & Psikoterapi
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/service') }}">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Pemeriksaan Potensi & Kompetensi Karyawan
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End footer-main-->

    <!-- scroll-to-top -->
    <div id="back-to-top" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
</div>

<!-- jquery -->
<script src="plugins/jquery.min.js"></script>
<!-- bootstrap -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="plugins/slick/slick-animation.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js" defer="defer"></script>
<!-- Google Map -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"
    defer="defer"></script>
<script src="plugins/google-map/gmap.js" defer="defer"></script>

<!-- jquery-ui -->
<script src="plugins/jquery-ui/jquery-ui.js" defer="defer"></script>
<!-- timePicker -->
<script src="plugins/timePicker/timePicker.js" defer="defer"></script>

<!-- script js -->
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.psychologist-slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

</body>

</html>