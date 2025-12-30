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
                                        <strong>Call Now</strong><br>
                                        <span>+62 812-1813-9323 (Hanya Chat)</span>
                                    </li>
                                </ul>
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
                                        <h1>Tentang Kami</h1>
                                        <ul class="title-menu clearfix">
                                            <li>
                                                <a href="{{ url('/') }}">Beranda &nbsp;/</a>
                                            </li>
                                            <li>Tentang Kami</li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <!--End Page Title-->

                            <!-- Our Story -->
                            <section class="story">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img loading="lazy" src="images/mhcu/mmpi.jpg" class="responsive" alt="story">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="story-content">
                                                <h2>Our Story</h2>
                                                <p>Mental Health Check Up merupakan layanan pemeriksaan kesehatan mental secara
                                                    menyeluruh, bertujuan memastikan kondisi kesehatan mental seseorang dan potensi
                                                    yang dimiliki, untuk kepastian dan kepentingan hukum, mengantisipasi gangguan
                                                    kesehatan mental yang dapat berkembang menjadi suatu gangguan yang serius, dan
                                                    deteksi dini dari suatu keadaan yang membutuhkan penanganan lebih lanjut.</p>
                                                <p>Hal ini sesuai dengan misi Rumah Sakit Soeharto Heerdjan yakni memberikan
                                                    layanan kesehatan mental yang komprehensif meliputi promotif, preventif, kuratif
                                                    dan rehabilitatif untuk menghasilkan masyarakat sehat yang mandiri dan
                                                    berkeadilan.</p>
                                                <p>Layanan MHCU yang mengusung layanan one stop service ini berada pada gedung
                                                    pelayanan terpadu yang terdapat di lantai 2. Layanan ini menawarkan kenyamanan
                                                    dan suasana eksekutif dengan pelayanan yang prima. Untuk menjaga selalu
                                                    kenyamanan anda kami menerapkan sistem perjanjian untuk layanan ini.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Promo Video -->
                            <section class="promo-video">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="block text-center">
                                                <h6>RS Soeharto Heerdjan</h6>
                                                <h1>Pusat Layanan
                                                    <br>
                                                     Neuropsikiatri Komprehensif
                                                </h1>
                                                <a
                                                    data-fancybox="data-fancybox"
                                                    href="https://youtu.be/N4oWT5NrQFg?si=vAJcRNQEXbJsu9I5">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="gallery bg-gray">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title text-center">
                                                <h3>Layanan MHCU
                                                    <span>RS Soeharto Heerdjan</span>
                                                </h3>
                                                <p>Layanan pemeriksaan kesehatan mental modern dan terpercaya.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="gallery-item">
                                                <img
                                                    loading="lazy"
                                                    src="images/mhcu/mmpi.jpg"
                                                    class="img-fluid"
                                                    alt="gallery-image">
                                                <a data-fancybox="images" href="images/mhcu/mmpi.jpg"></a>
                                                <h3>Pemeriksaan Tes MMPI</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="gallery-item">
                                                <img
                                                    loading="lazy"
                                                    src="images/mhcu/pemeriksaanpotensi.jpg"
                                                    class="img-fluid"
                                                    alt="gallery-image">
                                                <a data-fancybox="images" href="images/mhcu/pemeriksaanpotensi.jpg"></a>
                                                <h3>Pemeriksaan Potensi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="gallery-item">
                                                <img
                                                    loading="lazy"
                                                    src="images/mhcu/pemeriksaanhrv.jpg"
                                                    class="img-fluid"
                                                    alt="gallery-image">
                                                <a data-fancybox="images" href="images/mhcu/pemeriksaanhrv.jpg"></a>
                                                <h3>Pemeriksaan Tes HRV</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="gallery-item">
                                                <img
                                                    loading="lazy"
                                                    src="images/mhcu/pemeriksaaniq.jpg"
                                                    class="img-fluid"
                                                    alt="gallery-image">
                                                <a data-fancybox="images" href="images/mhcu/pemeriksaaniq.jpg"></a>
                                                <h3>Pemeriksaan Tes IQ</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="gallery-item">
                                                <img
                                                    loading="lazy"
                                                    src="images/mhcu/konselingpsikotes.jpg"
                                                    class="img-fluid"
                                                    alt="gallery-image">
                                                <a data-fancybox="images" href="images/mhcu/konselingpsikotes.jpg"></a>
                                                <h3>Konseling Psikoterapi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="gallery-item">
                                                <img
                                                    loading="lazy"
                                                    src="images/mhcu/nurse_station.jpg"
                                                    class="img-fluid"
                                                    alt="gallery-image">
                                                <a data-fancybox="images" href="images/mhcu/nurse_station.jpg"></a>
                                                <h3>Nurse Station</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Contact Section -->
                            <section class="appoinment-section section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="accordion-section">
                                                <div class="section-title">
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