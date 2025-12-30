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
                        <h1>Kontak</h1>
                        <ul class="title-menu clearfix">
                            <li>
                                <a href="{{ url('/') }}">Beranda &nbsp;/</a>
                            </li>
                            <li>Kontak</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <section class="section contact">
                <!-- container start -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 ">
                            <!-- address start -->
                            <div class="address-block">
                                <!-- Location -->
                                <div class="media">
                                    <i class="far fa-map"></i>
                                    <div class="media-body">
                                        <h3>Lokasi</h3>
                                        <p>Jl. Prof. Dr. Latumeten No.1, RT.1/RW.4, Jelambar,
                                            <br>Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11460</p>
                                    </div>
                                </div>
                                <!-- Phone -->
                                <div class="media">
                                    <i class="fas fa-phone"></i>
                                    <div class="media-body">
                                        <h3>Telepon</h3>
                                        <p>
                                            +62 82170006077
                                            <br>+62 812-1813-9323
                                            <br>(admin MHCU-chat only)
                                        </p>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="media">
                                    <i class="far fa-envelope"></i>
                                    <div class="media-body">
                                        <h3>Email</h3>
                                        <p>
                                            mhcu.grogol@gmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- address end -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="contact-form">
                                <!-- contact form start -->
                                <form id="contactForm" class="row">
                                    @csrf
                                    <!-- name -->
                                    <div class="col-lg-6">
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control main"
                                            placeholder="Nama"
                                            required="required">

                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-6">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control main"
                                            placeholder="Email"
                                            required="required">

                                    </div>
                                    <!-- phone -->
                                    <div class="col-lg-12">
                                        <input
                                            type="text"
                                            name="phone"
                                            class="form-control main"
                                            placeholder="No-Telp"
                                            required="required">

                                    </div>
                                    <!-- message -->
                                    <div class="col-lg-12">
                                        <textarea
                                            name="message"
                                            rows="10"
                                            class="form-control main"
                                            placeholder="Pesan"></textarea>

                                    </div>
                                    <!-- submit button -->
                                    <div class="col-md-12 text-right">
                                       <button type="submit" id="btnKirim">Kirim Pesan</button>
                                    </div>
                                </form>
                                <!-- contact form end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container end -->
            </section>
            <!--==== End of Contact Form ====-->

            <!--footer-main-->
            <footer class="footer-main">
                <div class="footer-top">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="{{ url('/') }}">
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpBHuOUbVTNDbBVH_ViEe6wF-WUojfOew"
    defer="defer"></script>
<script src="plugins/google-map/gmap.js" defer="defer"></script>

<!-- jquery-ui -->
<script src="plugins/jquery-ui/jquery-ui.js" defer="defer"></script>
<!-- timePicker -->
<script src="plugins/timePicker/timePicker.js" defer="defer"></script>

<!-- script js -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // cegah refresh

        const formData = {
            name: form.querySelector('input[name="name"]').value,
            email: form.querySelector('input[name="email"]').value,
            phone: form.querySelector('input[name="phone"]').value,
            message: form.querySelector('textarea[name="message"]').value,
        };

        fetch("/contact/store", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formData)
        })
        .then(res => res.json())
        .then(data => {
            Swal.fire({
                title: "Pesan Berhasil Terkirim!",
                icon: "success",
                confirmButtonText: "OK"
            });

            form.reset();
        })
        .catch(err => {
            Swal.fire({
                title: "Terjadi Kesalahan",
                text: "Coba lagi beberapa saat.",
                icon: "error",
                confirmButtonText: "OK"
            });
        });
    });
});
</script>
</body>

</html>