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
        <link rel="stylesheet" href="plugins/slick/slick.css">
        <link rel="stylesheet" href="plugins/slick/slick-theme.css">
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

                        <!-- Logo -->
                        <div class="col-xl-4 col-lg-3">
                            <div class="logo">
                                 <a href="{{ url('/') }}">
                                    <img loading="lazy" class="img-fluid" src="images/logo_rsj.png" alt="logo">
                                </a>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="col-xl-8 col-lg-9">
                            <div class="right-side d-flex justify-content-between align-items-center">

                                <!-- Contact Info -->
                                <ul class="contact-info pl-0 mb-0 d-flex">
                                    <li class="item text-left me-4">
                                        <div class="icon-box">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <strong>Email</strong><br>
                                        <a href="mailto:mhcu.grogol@gmail.com">
                                            <span>mhcu.grogol@gmail.com</span>
                                        </a>
                                    </li>

                                    <li class="item text-left me-4">
                                        <div class="icon-box">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <strong>Hubungi Kami</strong><br>
                                        <span>+62 812-1813-9323 (Hanya Chat)</span>
                                    </li>
                                </ul>
                  
                                <!-- LOGIN / USER MENU -->
                                <div class="user-login">
                                    @guest
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm">
                                        Login
                                    </a>
                                    @endguest @auth
                                    <div class="d-flex align-items-center">

                                        <!-- Nama user + dropdown logout -->
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                type="button"
                                                id="userMenu"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                {{ Auth::user()->name }}
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('mhcu.dashboard') }}">
                                                        <i class="bi bi-speedometer2 me-1"></i>
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <i class="bi bi-box-arrow-right me-1"></i>
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <form
                                            id="logout-form"
                                            action="{{ route('logout') }}"
                                            method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    @endauth
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

                            <!--================================= = Page Slider ===================================-->
                            <div class="hero-slider">
                                <!-- Slide 1 -->
                                <div
                                    class="slider-item slide1"
                                    style="background-image: url('{{ asset('images/slider/mhcuteam2.jpg') }}');">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="content style text-center">
                                                    <h2 class="text-white text-bold mb-2">Psikolog Terbaik Kami</h2>
                                                    <p class="tag-text mb-4">Ditangani oleh psikolog berpengalaman di bidang klinis dan organisasi.</p>
                                                    <a href="{{ url('/about') }}" class="btn btn-main btn-white">Jelajahi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div
                                    class="slider-item"
                                    style="background-image: url('{{ asset('images/slider/konselingpsikotes.jpg') }}');">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="content style text-center">
                                                    <h2 class="text-white">Kami Peduli dengan Kesehatan Mental Anda</h2>
                                                    <p class="tag-text mb-4">Dapatkan sesi asesmen dan konseling profesional.</p>
                                                    <a href="{{ url('/about') }}" class="btn btn-main btn-white">Jelajahi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div
                                    class="slider-item"
                                    style="background-image: url('{{ asset('images/slider/pemeriksaanhrv.jpg') }}');">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="content text-center style">
                                                    <h2 class="text-white text-bold mb-2">Layanan Medis Terbaik</h2>
                                                    <p class="tag-text mb-4">Deteksi dini kondisi emosional dan psikologis Anda.</p>
                                                    <a href="{{ url('/appointment') }}" class="btn btn-main btn-white">Jelajahi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--about section-->
                            <section class="feature-section section bg-gray">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="image-content">
                                                <div class="section-title text-center">
                                                    <h3>Layanan Unggulan
                                                        <span>Unit MHCU Kami</span></h3>
                                                    <p class="mb-0">Unit Mental Health Check Up merupakan layanan terpadu yang menyediakan
                                                        <br>
                                                        berbagai bentuk pemeriksaan dan asesmen kesehatan jiwa serta jasmani untuk
                                                        mendukung kesejahteraan individu secara menyeluruh.</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="item">
                                                            <div class="icon-box">
                                                                <figure>
                                                                    <a href="{{ url('/service') }}"><img loading="lazy" src="images/resource/1.png" alt="features image"></a>
                                                                </figure>
                                                            </div>
                                                            <h3 class="mb-2">Tes MMPI (Minnesota Multiphasic Personality Inventory)</h3>
                                                            <p>Sebagai alat ukur kepribadian untuk menilai kondisi psikologis dan potensi
                                                                gangguan mental.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="item">
                                                            <div class="icon-box">
                                                                <figure>
                                                                    <a href="{{ url('/service') }}">
                                                                        <img loading="lazy" src="images/resource/2.png" alt="features image">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            <h3 class="mb-2">Tes HRV (Heart Rate Variability)</h3>
                                                            <p>Guna mengukur tingkat stres dan keseimbangan sistem saraf otonom.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="item">
                                                            <div class="icon-box">
                                                                <figure>
                                                                    <a href="{{ url('/service') }}">
                                                                        <img loading="lazy" src="images/resource/3.png" alt="features image">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            <h3 class="mb-2">Tes Psikotes</h3>
                                                            <p>Untuk menilai kapasitas kecerdasan (IQ), minat dan bakat, kapasitas kerja,
                                                                serta tes kepribadian guna memahami karakter, potensi, dan gaya kerja seseorang</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="item">
                                                            <div class="icon-box">
                                                                <figure>
                                                                    <a href="{{ url('/service') }}">
                                                                        <img loading="lazy" src="images/resource/4.png" alt="features image">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            <h3 class="mb-2">Konseling dan Psikoterapi
                                                            </h3>
                                                            <p>Untuk membantu individu mengatasi permasalahan psikologis, stres, maupun
                                                                gangguan emosional, sehingga dapat mencapai keseimbangan mental dan kualitas
                                                                hidup yang lebih baik.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End about section-->

                                    <!--Start about us area-->
                                    <section class="service-tab-section section">
                                        <div class="outer-box clearfix">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- Nav tabs -->
                                                        <div class="tabs mb-5">
                                                            <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
                                                                <li class="nav-item">
                                                                    <a
                                                                        class="nav-link active"
                                                                        id="tab-rohani"
                                                                        data-toggle="tab"
                                                                        href="#rohani-jasmani-napza"
                                                                        role="tab">Rohani & Jasmani, Napza</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="tab-hrv" data-toggle="tab" href="#hrv-test" role="tab">Pemeriksaan HRV Test</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a
                                                                        class="nav-link"
                                                                        id="tab-potensi"
                                                                        data-toggle="tab"
                                                                        href="#potensi-kompetensi"
                                                                        role="tab">Pemeriksaan Potensi & Kompetensi Karyawan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a
                                                                        class="nav-link"
                                                                        id="tab-konseling"
                                                                        data-toggle="tab"
                                                                        href="#konseling-psikoterapi"
                                                                        role="tab">Konseling & Psikoterapi</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a
                                                                        class="nav-link"
                                                                        id="tab-iq"
                                                                        data-toggle="tab"
                                                                        href="#iq-minat-bakat"
                                                                        role="tab">Pemeriksaan IQ & Minat Bakat</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!--Start single tab content-->
                                                        <div class="tab-content" id="aboutTab">
                                                            <div class="service-box tab-pane fade show active" id="rohani-jasmani-napza">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img
                                                                            loading="lazy"
                                                                            class="img-fluid"
                                                                            src="images/mhcu/mmpi.jpg"
                                                                            alt="service-image">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="contents">
                                                                            <div class="section-title">
                                                                                <h3>Pemeriksaan Rohani, Jasmani dan Bebas Napza</h3>
                                                                            </div>
                                                                            <div class="text">
                                                                                <p>Pemeriksaan kondisi fisik dan bebas narkoba guna persyaratan tertentu dengan
                                                                                    pemeriksaan lab yang valid. Persyaratan yang biasa dilakukan yakni untuk
                                                                                    kebutuhan persyaratan kerja di sektor swasta maupun pemerintahan, seleksi
                                                                                    CPNS/PPPK, Pendaftaran pendidikan tertentu, serta persyaratan legalitas lainnya.
                                                                                </p>
                                                                                <p>Pemeriksaan dilakukan oleh tenaga profesional sesuai bidangnya seperti dokter
                                                                                    umum, dokter jiwa (psikiater), serta petugas laboratorium untuk tes NAPZA.
                                                                                </p>
                                                                            </div>
                                                                            <ul class="content-list">
                                                                                <li>
                                                                                    <i class="far fa-dot-circle"></i>Pemeriksaan Rohani.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="far fa-dot-circle"></i>Pemeriksaan Jasmani.
                                                                                </li>
                                                                                <li>
                                                                                    <i class="far fa-dot-circle"></i>Pemeriksaan Bebas Napza
                                                                                </li>
                                                                            </ul>
                                                                            <a href="{{ url('/service') }}" class="btn btn-style-one">Lebih Lanjut</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End single tab content-->
                                                            <!--Start single tab content-->
                                                            <div class="service-box tab-pane fade" id="hrv-test">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img
                                                                            loading="lazy"
                                                                            class="img-fluid"
                                                                            src="images/mhcu/pemeriksaanhrv.jpg"
                                                                            alt="service-image">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="contents">
                                                                            <div class="section-title">
                                                                                <h3>Pemeriksaan HRV Test</h3>
                                                                            </div>
                                                                            <div class="text">
                                                                                <p>Pemeriksaan ini mengukur variasi waktu antar detak jantung (interval R-R)
                                                                                    yang akan menunjukkan fungsi sistem saraf otonom, respons tubuh terhadap stres,
                                                                                    relaksasi, dan keseimbangan tubuh secara umum.</p>
                                                                                <p>Tes dapat dilaksanakan dirumah sakit ataupun di instansi. Hasil tes HRV dapat
                                                                                    dikonsultasikan dengan tenaga kesehatan (psikiater, dokter umum, psikolog
                                                                                    klinis, perawat jiwa)</p>
                                                                            </div>
                                                                            <ul class="content-list">
                                                                                <li>
                                                                                    <i class="far fa-dot-circle"></i>Keseimbangan sistem saraf otonom (simpatis & parasimpatis)
                                                                                </li>
                                                                                <li>
                                                                                    <i class="far fa-dot-circle"></i>Tingkat stres fisiologis dan psikologis
                                                                                </li>
                                                                                <li>
                                                                                    <i class="far fa-dot-circle"></i>Risiko kelelahan kronis, burnout, atau gangguan metabolik
                                                                                </li>
                                                                            </ul>
                                                                            <a href="{{ url('/service') }}" class="btn btn-style-one">Lebih Lanjut</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End single tab content-->
                                                            <!--Start single tab content-->
                                                            <div class="service-box tab-pane fade" id="potensi-kompetensi">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img
                                                                            loading="lazy"
                                                                            class="img-fluid"
                                                                            src="images/mhcu/pemeriksaanpotensi.jpg"
                                                                            alt="service-image">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="contents">
                                                                            <div class="section-title">
                                                                                <h3>Pemeriksaan Potensi & Kompetensi Karyawan</h3>
                                                                            </div>
                                                                            <div class="text">
                                                                                <p>Pemeriksaan pada perusahaan/ instansi untuk mengetahui potensi dan kompetensi
                                                                                    karyawan sehingga dapat memutuskan kandidat (calon karyawan) yang dapat
                                                                                    ditempatkan secara tepat berdasarkan prinsip The Right Man and The Right Place.
                                                                                    Psikotes merupakan alat seleksi yang sering digunakan sebagai evaluasi terhadap
                                                                                    perilaku seseorang yang dibutuhkan dalam suatu jabatan tertentu. Beberapa
                                                                                    layanan asesmen psikologis yang dapat kami lakukan antara lain adalah promosi
                                                                                    jabatan, pemetaan, dan profiling.</p>
                                                                            </div>

                                                                            <a href="{{ url('/service') }}" class="btn btn-style-one">Lebih Lanjut</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End single tab content-->
                                                            <!--Start single tab content-->
                                                            <div class="service-box tab-pane fade" id="konseling-psikoterapi">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img
                                                                            loading="lazy"
                                                                            class="img-fluid"
                                                                            src="images/mhcu/konselingpsikotes.jpg"
                                                                            alt="service-image">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="contents">
                                                                            <div class="section-title">
                                                                                <h3>Konseling & Psikoterapi</h3>
                                                                            </div>
                                                                            <div class="text">
                                                                                <p>Membantu mengenali dan menyelesaikan permasalahan psikologis, agar dapat
                                                                                    berdaya dan berfungsi optimal. Dilakukan oleh psikolog klinis.
                                                                                </p>

                                                                            </div>

                                                                            <a href="{{ url('/service') }}" class="btn btn-style-one">Lebih Lanjut</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End single tab content-->
                                                            <!--Start single tab content-->
                                                            <div class="service-box tab-pane fade" id="iq-minat-bakat">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <img
                                                                            loading="lazy"
                                                                            class="img-fluid"
                                                                            src="images/mhcu/pemeriksaaniq.jpg"
                                                                            alt="service-image">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="contents">
                                                                            <div class="section-title">
                                                                                <h3>Pemeriksaan IQ & Minat Bakat</h3>
                                                                            </div>
                                                                            <div class="text">
                                                                                <p>Pemeriksaan untuk keperluan sekolah, terapi serta kesiapan dalam mencari
                                                                                    potensi diri. Dilakukan oleh psikolog klinis dengan menggunakan alat tes yang
                                                                                    terstandarisasi dan sesuai dengan kode etik psikologi.</p>
                                                                            </div>
                                                                            <a href="{{ url('/service') }}" class="btn btn-style-one">Lebih Lanjut</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End single tab content-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End about us area-->

                                    <!--Service Section-->
                                    <section class="service-section bg-gray section">
                                        <div class="container">
                                            <div class="section-title text-center">
                                                <h3>Layanan
                                                    <span>Yang Tersedia</span>
                                                </h3>
                                                <p>Unit Mental Health Check Up merupakan layanan terpadu yang menyediakan
                                                    berbagai bentuk pemeriksaan dan asesmen kesehatan jiwa serta jasmani untuk
                                                    mendukung kesejahteraan individu secara menyeluruh.
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="items-container">
                                                        <div class="item">
                                                            <div class="inner-box">
                                                                <div class="img_holder">
                                                                    <a href="{{ url('/service') }}">
                                                                        <img loading="lazy" src="images/mhcu/mmpi.jpg" alt="images" class="img-fluid"></a>
                                                                </div>
                                                                <div class="image-content text-center">
                                                                    <span>Siap membantu meningkatkan kesejahteraan mental Anda</span>
                                                                    <a href="{{ url('/service') }}">
                                                                        <h6>Tes MMPI (Minnesota Multiphasic Personality Inventory)
                                                                        </h6>
                                                                    </a>
                                                                    <p>Sebagai alat ukur kepribadian untuk menilai kondisi psikologis dan potensi
                                                                        gangguan mental.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="inner-box">
                                                                <div class="img_holder">
                                                                    <a href="{{ url('/service') }}">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="images/mhcu/pemeriksaanhrv.jpg"
                                                                            alt="images"
                                                                            class="img-fluid"></a>
                                                                </div>
                                                                <div class="image-content text-center">
                                                                    <span>Siap membantu meningkatkan kesejahteraan mental Anda</span>
                                                                    <a href="{{ url('/service') }}">
                                                                        <h6>Tes HRV (Heart Rate Variability)
                                                                        </h6>
                                                                    </a>
                                                                    <p>Guna mengukur tingkat stres dan keseimbangan sistem saraf otonom.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="inner-box">
                                                                <div class="img_holder">
                                                                    <a href="{{ url('/service') }}">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="images/mhcu/pemeriksaaniq.jpg"
                                                                            alt="images"
                                                                            class="img-fluid"></a>
                                                                </div>
                                                                <div class="image-content text-center">
                                                                    <span>Siap membantu meningkatkan kesejahteraan mental Anda</span>
                                                                    <a href="{{ url('/service') }}">
                                                                        <h6>Pemeriksaan IQ & Minat Bakat</h6>
                                                                    </a>
                                                                    <p>Tersedia berbagai psikotes untuk menilai kapasitas kecerdasan (IQ), minat dan
                                                                        bakat, kapasitas kerja, serta tes kepribadian guna memahami karakter, potensi,
                                                                        dan gaya kerja seseorang.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="inner-box">
                                                                <div class="img_holder">
                                                                    <a href="{{ url('/service') }}">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="images/mhcu/konselingpsikotes.jpg"
                                                                            alt="images"
                                                                            class="img-fluid"></a>
                                                                </div>
                                                                <div class="image-content text-center">
                                                                    <span>Siap membantu meningkatkan kesejahteraan mental Anda</span>
                                                                    <a href="{{ url('/service') }}">
                                                                        <h6>Konseling dan Psikoterapi</h6>
                                                                    </a>
                                                                    <p>Membantu individu mengatasi permasalahan psikologis, stres, maupun gangguan
                                                                        emosional, sehingga dapat mencapai keseimbangan mental dan kualitas hidup yang
                                                                        lebih baik.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="inner-box">
                                                                <div class="img_holder">
                                                                    <a href="{{ url('/service') }}">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="images/mhcu/pemeriksaanpotensi.jpg"
                                                                            alt="images"
                                                                            class="img-fluid"></a>
                                                                </div>
                                                                <div class="image-content text-center">
                                                                    <span>Siap membantu meningkatkan kesejahteraan mental Anda</span>
                                                                    <a href="{{ url('/service') }}">
                                                                        <h6>Pemeriksaan Potensi & Kompetensi Karyawan</h6>
                                                                    </a>
                                                                    <p>Penilaian potensi pegawai yang membantu instansi dalam proses seleksi dan
                                                                        pengembangan sumber daya manusia..</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End Service Section-->

                                    <!--team section-->
                                    <section class="team-section section">
                                        <div class="container">
                                            <div class="section-title text-center">
                                                <h3>Psikolog
                                                    <span>Berpengalaman Kami</span></h3>
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

                                    <!--testimonial-section-->
                                    <section
                                        class="testimonial-section"
                                        style="background: url('{{ asset('images/testimonials/1.jpg') }}');">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="section-title text-center">
                                                        <h3>Pengalaman
                                                            <span>Pasien Kami</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="testimonial-carousel">
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/female.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Andini Saputri</h6>
                                                                <p class="mb-0">Pelayanannya cepat dan ramah, proses pemeriksaannya juga jelas.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/male.jpeg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Rizky Hidayat</h6>
                                                                <p class="mb-0">Sangat baik, dari pendaftaran sampai konsultasi terasa nyaman.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/female.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Mira Lestari</h6>
                                                                <p class="mb-0">Hasil asesmen disampaikan dengan profesional dan mudah dipahami.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/male.jpeg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Bagas Pratama</h6>
                                                                <p class="mb-0">Ruangan bersih dan stafnya sopan, membuat saya tidak merasa cemas.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/female.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Siti Mardhiyah</h6>
                                                                <p class="mb-0">Pemeriksaan jasmani dan rohani berjalan tertib dan terstruktur.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/male.jpeg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Dimas Kurniawan</h6>
                                                                <p class="mb-0">Petugasnya komunikatif, saya jadi lebih mengerti kondisi saya.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/female.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Livia Nuraini</h6>
                                                                <p class="mb-0">Pelayanan psikotes cepat dan hasilnya detail.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/male.jpeg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Fauzan Rahman</h6>
                                                                <p class="mb-0">MHCU sangat membantu kebutuhan administrasi kerja saya.</p>
                                                            </div>
                                                        </div>
                                                        <!--Slide Item-->
                                                        <div class="slide-item">
                                                            <div class="inner-box text-center">
                                                                <div class="image-box">
                                                                    <figure>
                                                                        <img loading="lazy" src="images/mhcu/female.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <h6>Nadya Ramadhani</h6>
                                                                <p class="mb-0">Fasilitas lengkap dan alurnya jelas, pemeriksaan jadi lebih mudah.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End testimonial-section-->

                                    <!-- Contact Section -->
                                    <section class="appoinment-section section">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordion-section">
                                                        <div class="section-title">
                                                            <h3>Pertanyaan yang Sering Diajukan</h3>
                                                        </div>
                                                        <div class="accordion-holder">
                                                            <div
                                                                class="accordion"
                                                                id="accordionGroup"
                                                                role="tablist"
                                                                aria-multiselectable="true">
                                                                <div class="card">
                                                                    <div class="card-header" role="tab" id="headingOne">
                                                                        <h4 class="card-title">
                                                                            <a
                                                                                role="button"
                                                                                data-toggle="collapse"
                                                                                href="#collapseOne"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapseOne">
                                                                                Layanan MHCU (Pelayanan & Operasional)
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div
                                                                        id="collapseOne"
                                                                        class="collapse show"
                                                                        role="tabpanel"
                                                                        aria-labelledby="headingOne"
                                                                        data-parent="#accordionGroup">
                                                                        <div class="card-body">
                                                                            Pelayanan di MHCU diberikan oleh tenaga profesional yang terdiri dari psikiater,
                                                                            psikolog klinis, dan dokter umum. Loket atau kantor pelayanan MHCU berada di
                                                                            gedung pelayanan lantai 2, dengan jam operasional mulai pukul 08.00 hingga 16.00
                                                                            WIB. Selain layanan tatap muka, beberapa layanan juga tersedia secara online,
                                                                            terutama pemeriksaan MMPI dan jenis pemeriksaan psikotes tertentu yang dapat
                                                                            dilakukan tanpa harus datang langsung.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" role="tab" id="headingTwo">
                                                                        <h4 class="card-title">
                                                                            <a
                                                                                class="collapsed"
                                                                                role="button"
                                                                                data-toggle="collapse"
                                                                                href="#collapseTwo"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseTwo">
                                                                                Prosedur Pelayanan
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div
                                                                        id="collapseTwo"
                                                                        class="collapse"
                                                                        role="tabpanel"
                                                                        aria-labelledby="headingTwo"
                                                                        data-parent="#accordionGroup">
                                                                        <div class="card-body">
                                                                            Untuk mengajukan permohonan layanan MHCU, pemohon dapat menghubungi nomor
                                                                            WhatsApp MHCU kemudian datang sesuai jadwal pemeriksaan yang telah ditentukan.
                                                                            Dokumen yang perlu disiapkan bergantung pada jenis layanan, seperti surat
                                                                            permohonan dari instansi untuk pembuatan surat keterangan rohani, jasmani, atau
                                                                            bebas narkoba; permohonan dari instansi kerja untuk surat kelaikan kerja; serta
                                                                            permintaan dari pengadilan atau rumah terkait pemeriksaan yang dibutuhkan untuk
                                                                            keperluan hukum seperti pengampuan atau adopsi. Waktu proses pelayanan juga
                                                                            bervariasi, mulai dari satu hari untuk pemeriksaan MMPI dan surat keterangan
                                                                            sehat rohani, hingga maksimal tiga hari kerja untuk pemeriksaan psikologis
                                                                            seperti tes IQ, kepribadian, dan kapasitas kerja. Pemeriksaan untuk kepentingan
                                                                            hukum memerlukan waktu hingga 14 hari kerja, sementara pemeriksaan kelaikan
                                                                            kerja membutuhkan maksimal 10 hari kerja setelah pemeriksaan dilakukan.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header" role="tab" id="headingThree">
                                                                        <h4 class="card-title">
                                                                            <a
                                                                                class="collapsed"
                                                                                role="button"
                                                                                data-toggle="collapse"
                                                                                href="#collapseThree"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseThree">
                                                                                Biaya dan Pembayaran
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div
                                                                        id="collapseThree"
                                                                        class="collapse"
                                                                        role="tabpanel"
                                                                        aria-labelledby="headingThree"
                                                                        data-parent="#accordionGroup">
                                                                        <div class="card-body">
                                                                            Tarif layanan MHCU bervariasi tergantung jenis pemeriksaan atau tindakan yang
                                                                            dilakukan, dan informasi lengkap mengenai biaya dapat ditanyakan langsung
                                                                            melalui WhatsApp Admin. Untuk metode pembayaran, pengguna layanan dapat membayar
                                                                            secara langsung di lokasi maupun melalui transfer sesuai ketentuan yang berlaku.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- End Contact Section -->

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
                                                                            <img loading="lazy" class="img-fluid" src="images/logo_rssh-removebg.png" alt="medic">
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
                            <script src="plugins/slick/slick.min.js"></script>
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
                            <script src="js/script.js"></script>

                            <script
                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                        </body>

                    </html>