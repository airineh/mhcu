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
                        <h1>Layanan</h1>
                        <ul class="title-menu clearfix">
                            <li>
                                <a href="{{ url('/') }}">Beranda &nbsp;/</a>
                            </li>
                            <li>Layanan</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <section class="service-overview section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="content-block">
                                <h2>Pemeriksaan Rohani, Jasmani dan Bebas Napza</h2>
                                <p>Pemeriksaan kondisi fisik dan bebas narkoba guna persyaratan tertentu dengan
                                    pemeriksaan lab yang valid. Persyaratan yang biasa dilakukan yakni untuk
                                    kebutuhan persyaratan kerja di sektor swasta maupun pemerintahan, seleksi
                                    CPNS/PPPK, Pendaftaran pendidikan tertentu, serta persyaratan legalitas lainnya.
                                </p>
                                <p>Pemeriksaan dilakukan oleh tenaga profesional sesuai bidangnya seperti dokter
                                    umum, dokter jiwa (psikiater), serta petugas laboratorium untuk tes NAPZA.
                                </p>
                                <ul>
                                    <li>
                                        <i class="fas fa-caret-right"></i>Pemeriksaan Rohani</li>
                                    <li>
                                        <i class="fas fa-caret-right"></i>Pemeriksaan Jasmani</li>
                                    <li>
                                        <i class="fas fa-caret-right"></i>Pemeriksaan Bebas Napza</li>
                                </ul>
                                <a href="{{ url('/service') }}" class="btn btn-style-one">Lebih Lanjut</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion-section">
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
                </div>
            </section>

            <section class="section pt-0">
                <div class="container service-box">
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
                                        <i class="far fa-check-circle"></i>Keseimbangan sistem saraf otonom (simpatis & parasimpatis)</li>
                                    <li>
                                        <i class="far fa-check-circle"></i>Tingkat stres fisiologis dan psikologis</li>
                                    <li>
                                        <i class="far fa-check-circle"></i>Risiko kelelahan kronis, burnout, atau gangguan metabolik</li>
                                </ul>
                                <a href="{{ url('/service') }}" class="btn btn-style-one">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                                                <img loading="lazy" src="images/mhcu/mmpi.jpg" alt="images" class="img-fluid">
                                            </a>
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
                                                    class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="image-content text-center">
                                            <span>Siap membantu meningkatkan kesejahteraan mental Anda</span>
                                            <a href="{{ url('/service') }}">
                                                <h6>Tes HRV (Heart Rate Variability)
                                                </h6>
                                            </a>
                                            <p>Guna mengukur tingkat stres dan keseimbangan sistem saraf otonom..
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
                                                    class="img-fluid">
                                            </a>
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
                                                    class="img-fluid">
                                            </a>
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
                                                    class="img-fluid">
                                            </a>
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
</body>

</html>