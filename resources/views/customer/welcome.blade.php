<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themewagon.github.io/Cental/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2025 06:01:29 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>FlexiGadget - Handphone&Laptop Rent </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tempatkan ini di dalam tag <head> atau sebelum <script> -->
    <meta name="user-logged-in" content="{{ Auth::check() ? 'true' : 'false' }}">



    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&amp;family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="{{ asset('path-to-fontawesome/css/all.css') }}" />

    <link href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
        <div class="container">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted me-4"><i
                                class="fas fa-map-marker-alt text-primary me-2"></i>Karawang,Jawa Barat</a>
                        <a href="tel:+01234567890" class="text-muted me-4"><i
                                class="fas fa-phone-alt text-primary me-2"></i>081573635413 </a>
                        <a href="mailto:example@gmail.com" class="text-muted me-0"><i
                                class="fas fa-envelope text-primary me-2"></i>Muhamad Naufal@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary"><i class="fas fa-laptop me-3"></i></i>FlexiGadget</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="/welcome" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link ">About</a>
                        <a href="service" class="nav-item nav-link">Service</a>
                        <a href="blog" class="nav-item nav-link">Blog</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Our Feature</a>
                                <a href="cars.html" class="dropdown-item">Our Cars</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary rounded-pill py-2 px-4">Logout</button>
                        </form>
                    @else
                        <a href="/" class="btn btn-primary rounded-pill py-2 px-4">Get Started</a>
                    @endauth
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Carousel Start -->
    <div class="header-carousel">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/download (4).jpeg" class="img-fluid w-100" alt="First slide" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5">
                                <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                    style="animation-delay: 1s;">

                                </div>
                                <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight"
                                    data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start">
                                        <h1 class="display-5 text-white">Dapatkan 15% Diskon pada Rental Anda!
                                            Rencanakan Kebutuhan Teknologi Anda Sekarang!</h1>
                                        <p>Nikmati pengalaman teknologi terbaik dengan handphone dan laptop kelas atas!
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Features Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">FlexiGadget <span class="text-primary">Features</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita
                    asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis
                    modi quisquam quia distinctio,
                </p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-xl-4">
                    <div class="row gy-4 gx-0">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <span class="fa fa-trophy fa-2x"></span>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-3">Layanan Kelas Satu</h5>
                                    <p class="mb-0">Nikmati layanan terbaik kami dengan gadget berkualitas untuk
                                        kebutuhan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <span class="fa fa-headset fa-2x"></span>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-3">Dukungan 24/7</h5>
                                    <p class="mb-0">Tim kami siap membantu Anda kapan saja dengan dukungan penuh selama
                                        24 jam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/Apple_iPhone_15_Pro___iPhone_15_Pro__Max-removebg-preview.png" class="img-fluid w-100"
                        style="object-fit: cover;" alt="Img">
                </div>
                <div class="col-xl-4">
                    <div class="row gy-4 gx-0">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item justify-content-end">
                                <div class="text-end me-4">
                                    <h5 class="mb-3">Kualitas dengan Harga Terjangkau</h5>
                                    <p class="mb-0">Sewa gadget premium dengan harga terbaik. Pilih dari koleksi terbaru
                                        handphone dan laptop.</p>
                                </div>
                                <div class="feature-icon">
                                    <span class="fa fa-laptop-house fa-2x"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item justify-content-end">
                        <div class="text-end me-4">
                            <h5 class="mb-3">Layanan Antar-Jemput Gratis</h5>
                            <p class="mb-0">Nikmati kemudahan dengan layanan antar-jemput<br> gratis untuk penyewaan
                                gadget Anda.</p>
                        </div>
                        <div class="feature-icon">
                            <span class="fa fa-truck fa-2x"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Features End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="pb-5">
                            <h1 class="display-5 text-capitalize">Tentang <span class="text-primary">Kami</span></h1>
                            <p class="mb-0">Kami menyediakan layanan penyewaan gadget terbaik, termasuk handphone dan
                                laptop terbaru, dengan harga yang terjangkau. Dedikasi kami adalah memberikan pengalaman
                                terbaik kepada pelanggan dengan produk berkualitas dan layanan profesional.</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="about-item-inner border p-4">
                                    <div class="about-icon mb-4">
                                        <img src="img/about-icon-1.png" class="img-fluid w-50 h-50" alt="Ikon">
                                    </div>
                                    <h5 class="mb-3">Visi Kami</h5>
                                    <p class="mb-0">Menjadi penyedia layanan penyewaan gadget terbaik yang memberikan
                                        kemudahan dan inovasi untuk mendukung kebutuhan teknologi Anda.</p>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="about-item-inner border p-4">
                                    <div class="about-icon mb-4">
                                        <img src="img/about-icon-2.png" class="img-fluid h-50 w-50" alt="Ikon">
                                    </div>
                                    <h5 class="mb-3">Misi Kami</h5>
                                    <p class="mb-0">Menyediakan layanan penyewaan gadget yang terjangkau, terpercaya,
                                        dan berkualitas tinggi untuk memenuhi kebutuhan teknologi Anda dengan mudah.</p>
                                </div>
                            </div>

                        </div>
                        <p class="text-item my-4">Kami bertujuan untuk menjadi mitra terpercaya dalam penyewaan gadget,
                            memberikan solusi teknologi yang praktis dan hemat biaya untuk semua pelanggan kami. Dengan
                            berbagai pilihan gadget terbaru dan layanan pelanggan yang profesional, kami berkomitmen
                            untuk mempermudah akses teknologi untuk semua orang.</p>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="text-center rounded bg-secondary p-4">
                                    <h1 class="display-6 text-white">17</h1>
                                    <h5 class="text-light mb-0">Tahun Pengalaman</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="rounded">
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Layanan
                                        penyewaan gadget dengan harga terjangkau</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Pilihan
                                        perangkat terbaru dan berkualitas</p>
                                    <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Proses
                                        pemesanan yang mudah dan cepat</p>
                                    <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Dukungan
                                        pelanggan 24/7 yang responsif</p>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <a href="#" class="btn btn-primary rounded py-3 px-5">More About Us</a>
                            </div>
                            <div class="col-lg-7">
                                <div class="d-flex align-items-center">
                                    <img src="img/ucil.jpg"
                                        class="img-fluid rounded-circle border border-4 border-secondary"
                                        style="width: 100px; height: 100px;" alt="Image">
                                    <div class="ms-4">
                                        <h4>Ucil IT</h4>
                                        <p class="mb-0">CO CyberIndo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-img">
                        <div class="img-1">
                            <img src="img/download (4).jpeg" class="img-fluid rounded h-100 w-100" alt="">
                        </div>
                        <div class="img-2">
                            <img src="img/Zenbook S13 UX392｜Ноутбуки для дома｜ASUS в России.jpeg"
                                class="img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Counter -->
    <div class="container-fluid counter bg-secondary py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                        </div>
                        <div class="counter-counting my-3">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                        <h4 class="text-white mb-0">Klien Puas</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <div class="counter-counting my-3">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">780</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                        <h4 class="text-white mb-0">Penyewaan Handphone & Laptop</h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-laptop fa-2x"></i> <!-- Ikon untuk laptop -->
                        </div>
                        <div class="counter-counting my-3">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">4</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                        <h4 class="text-white mb-0">Pusat Penyewaan Gadget</h4>
                        <!-- Sesuaikan dengan konteks penyewaan gadget -->
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter-item text-center">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-calendar-check fa-2x"></i> <!-- Ikon untuk durasi penyewaan -->
                        </div>
                        <div class="counter-counting my-3">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">589</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                        <h4 class="text-white mb-0">Total Durasi Penyewaan</h4>
                        <!-- Mengganti Total kilometers menjadi Total Durasi Penyewaan -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Fact Counter -->

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Layanan <span class="text-primary">Penyewaan</span></h1>
                <p class="mb-0">Kami menyediakan layanan penyewaan handphone dan laptop berkualitas tinggi dengan harga
                    terjangkau. Nikmati kemudahan dan kenyamanan dalam menyewa perangkat teknologi yang Anda butuhkan,
                    kapan saja dan di mana saja.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-phone-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Penyewaan Handphone</h5>
                        <p class="mb-0">Kami menyediakan layanan penyewaan handphone terbaru dengan berbagai pilihan
                            tipe dan merek. Dapatkan perangkat berkualitas dengan harga yang terjangkau untuk kebutuhan
                            harian Anda.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-money-bill-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Harga Spesial</h5>
                        <p class="mb-0">Nikmati harga spesial untuk penyewaan handphone dan laptop dengan berbagai
                            pilihan paket. Kami menawarkan tarif terjangkau yang disesuaikan dengan kebutuhan Anda.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-laptop fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Sewa Fleksibel</h5>
                        <p class="mb-0">Dapatkan layanan sewa handphone dan laptop dengan fleksibilitas waktu yang
                            sesuai kebutuhan Anda, mulai dari harian hingga bulanan.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-shield-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Asuransi Perangkat</h5>
                        <p class="mb-0">Nikmati layanan asuransi untuk handphone dan laptop yang disewa, memberikan
                            perlindungan terhadap kerusakan atau kehilangan.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-truck fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Pengiriman Antar Kota</h5>
                        <p class="mb-0">Nikmati layanan pengiriman perangkat sewaan, seperti handphone dan laptop, antar
                            kota dengan pengiriman yang aman dan cepat.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <i class="fa fa-headphones-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Free Accessories</h5>
                        <p class="mb-0">Nikmati aksesori gratis seperti casing dan earphone saat menyewa handphone atau
                            laptop kami. Dapatkan kenyamanan lebih dalam setiap penggunaan perangkat.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Car categories Start -->
    <div class="container-fluid categories pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Gadget <span class="text-primary">Categories</span></h1>
                <p class="mb-0">Kami menawarkan berbagai pilihan gadget berkualitas tinggi untuk memenuhi kebutuhan
                    Anda. Mulai dari handphone terbaru hingga laptop canggih, semua tersedia dengan harga yang
                    terjangkau dan berbagai pilihan jangka waktu sewa. Temukan kategori perangkat yang sesuai dengan
                    kebutuhan teknologi Anda, dan nikmati kenyamanan serta kemudahan dalam penyewaan gadget dengan
                    layanan yang terpercaya.</p>
            </div>

            <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($handphone as $h)
                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="d-flex ">
                                <div class="avatar avatar-xl position-relative">
                                    @if($h->gambar)
                                        <img src="{{ Storage::url($h->gambar) }}" alt="handphone image"
                                            class="w-100 border-radius-lg shadow-sm">
                                    @else
                                        <img src="{{ asset('assets/img/default-handphone.jpg') }}" alt="default handphone image"
                                            class="w-100 border-radius-lg shadow-sm">
                                    @endif
                                </div>
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>{{ $h->nama }}</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">5.0 Review</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">
                                        {{ number_format($h->harga_sewa, 0, ',', '.') }}/Day
                                    </h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-memory text-dark"></i> <span
                                            class="text-body ms-1">{{ $h->ram }}/{{ $h->storage }}</span>
                                    </div>

                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-mobile text-dark"></i> <span
                                            class="text-body ms-1">{{ $h->kamera }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-wifi text-dark"></i> <span
                                            class="text-body ms-1">{{ $h->jaringan }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-microchip text-dark"></i> <span
                                            class="text-body ms-1">{{ $h->chipset }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-camera text-dark"></i> <span
                                            class="text-body ms-1">{{ $h->layar }}</span>
                                    </div>

                                </div>
                                <button class="btn btn-primary rounded-pill w-100 d-flex justify-content-center py-3"
                                    data-bs-toggle="modal" data-bs-target="#rentalModal" data-device="iPhone 15 Plus">Book
                                    Now</button>

                            </div>
                        </div>
                    </div>
                     @endforeach

                @foreach($laptop as $l)
                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="d-flex ">
                                <div class="avatar avatar-xl position-relative">
                                    @if($l->gambar)
                                        <img src="{{ Storage::url($l->gambar) }}" alt="laptop image"
                                            class="w-100 border-radius-lg shadow-sm">
                                    @else
                                        <img src="{{ asset('assets/img/default-laptop.jpg') }}" alt="default laptop image"
                                            class="w-100 border-radius-lg shadow-sm">
                                    @endif
                                </div>
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>{{ $l->nama }}</h4>
                                <div class="categories-review mb-4">
                                    <div class="me-3">5.0 Review</div>
                                    <div class="d-flex justify-content-center text-secondary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">
                                        {{ number_format($l->harga_sewa, 0, ',', '.') }}/Day
                                    </h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-memory text-dark"></i> <span
                                            class="text-body ms-1">{{ $l->ram }}/{{ $l->storage }}</span>
                                    </div>

                                    <div class="col-4 border-end border-white">
                                        <i class="fa fa-battery-half text-dark"></i> <span
                                            class="text-body ms-1">{{ $l->baterai }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-cogs text-dark"></i> <span
                                            class="text-body ms-1">{{ $l->os }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-desktop text-dark"></i> <span
                                            class="text-body ms-1">{{ $l->layar }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-microchip text-dark"></i> <span
                                            class="text-body ms-1">{{ $l->prosesor }}</span>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-category text-dark"></i> <span
                                            class="text-body ms-1">{{ $l->kategori }}</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary rounded-pill w-100 d-flex justify-content-center py-3"
                                    data-bs-toggle="modal" data-bs-target="#rentalModal" data-device="iPhone 15 Plus">Book
                                    Now</button>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/ip15plus.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>iPhone 15 Plus</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">5.0 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">900,000/Day</h4>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-memory text-dark"></i> <span class="text-body ms-1">128GB
                                        Storage</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-camera text-dark"></i> <span class="text-body ms-1">48MP
                                        Camera</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-battery-half text-dark"></i> <span class="text-body ms-1">4500mAh
                                        Battery</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-mobile-alt text-dark"></i> <span class="text-body ms-1">6.7"
                                        Display</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-wifi text-dark"></i> <span class="text-body ms-1">5G
                                        Connectivity</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-microchip text-dark"></i> <span class="text-body ms-1">A16 Bionic
                                        Chip</span>
                                </div>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 d-flex justify-content-center py-3"
                                data-bs-toggle="modal" data-bs-target="#rentalModal" data-device="iPhone 15 Plus">Book
                                Now</button>
                        </div>
                    </div>
                </div>
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/s24.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Samsung S24 Ultra</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">5.0 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">1,300,000/Day</h4>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-memory text-dark"></i> <span class="text-body ms-1">256GB
                                        Storage</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-camera text-dark"></i> <span class="text-body ms-1">200MP
                                        Camera</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-battery-full text-dark"></i> <span class="text-body ms-1">5000mAh
                                        Battery</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-mobile-alt text-dark"></i> <span class="text-body ms-1">6.8"
                                        Display</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-wifi text-dark"></i> <span class="text-body ms-1">5G
                                        Connectivity</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-microchip text-dark"></i> <span class="text-body ms-1">Exynos 2200
                                        Chip</span>
                                </div>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 d-flex justify-content-center py-3"
                                data-bs-toggle="modal" data-bs-target="#rentalModal" data-device="iPhone 15 Plus">Book
                                Now</button>
                        </div>

                    </div>
                </div>
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/asustuf.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Macbook M3 Air</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4,8 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">980.000/Day</h4>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-memory text-dark"></i> <span class="text-body ms-1">16GB RAM</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-hdd text-dark"></i> <span class="text-body ms-1">512GB SSD</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-gpu text-dark"></i> <span class="text-body ms-1">RTX 3060</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-desktop text-dark"></i> <span class="text-body ms-1">15.6"
                                        Display</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-battery-full text-dark"></i> <span class="text-body ms-1">5 Hours
                                        Battery</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">Windows 11</span>
                                </div>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 d-flex justify-content-center py-3"
                                data-bs-toggle="modal" data-bs-target="#rentalModal" data-device="iPhone 15 Plus">Book
                                Now</button>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/m3air.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Macbook M3 Air</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.9 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">2,100,000/Day</h4>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-memory text-dark"></i> <span class="text-body ms-1">16GB RAM</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-hdd text-dark"></i> <span class="text-body ms-1">512GB SSD</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-apple text-dark"></i> <span class="text-body ms-1">Apple M3
                                        Chip</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-desktop text-dark"></i> <span class="text-body ms-1">13.6"
                                        Display</span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-battery-full text-dark"></i> <span class="text-body ms-1">18 Hours
                                        Battery</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">macOS</span>
                                </div>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 d-flex justify-content-center py-3"
                                data-bs-toggle="modal" data-bs-target="#rentalModal" data-device="Macbook M3 Air"
                                data-price="2100000">Book Now</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Penyewaan -->
    <div class="modal fade" id="rentalModal" tabindex="-1" aria-labelledby="rentalModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rentalModalLabel">Penyewaan Perangkat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="rentalForm" action="{{ route('penyewaan.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_user" value="{{ Auth::id() }}">

                        <div class="mb-3">
                            <label for="deviceName" class="form-label">Nama Device</label>
                            <input type="text" class="form-control" name="merek" id="deviceName" readonly required>
                        </div>

                        <div class="mb-3">
                            <label for="renterName" class="form-label">Nama Anda</label>
                            <input type="text" class="form-control" name="nama" id="renterName"
                                value="{{ Auth::user()->name ?? '' }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="renterWa" class="form-label">Nomor WhatsApp</label>
                            <input type="text" class="form-control" name="no_wa" id="renterWa"
                                placeholder="Contoh: 6281234567890" required>
                        </div>

                        <div class="mb-3">
                            <label for="renterDurasi" class="form-label">Durasi peminjaman/hari</label>
                            <input type="number" class="form-control" name="durasi" id="renterDurasi" required>
                        </div>

                        <div class="mb-3">
                            <label for="rentalDate" class="form-label">Tanggal Penyewaan</label>
                            <input type="date" class="form-control" name="tanggal_sewa" id="rentalDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="rentalHarga" class="form-label">Harga Sewa</label>
                            <input type="number" class="form-control" name="harga_sewa" id="rentalHarga" required>
                        </div>

                        <input type="hidden" name="status" value="sewa">

                        <button type="submit" class="btn btn-primary">Sewa Sekarang</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <!--loading modal -->
    <div class="modal fade" id="loadingModal" tabindex="-1" aria-labelledby="loadingModalLabel" aria-hidden="true"
        data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="spinner-border text-primary mb-3" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <h5>Mohon tunggu sebentar...</h5>
                    <p>Sedang memproses penyewaan Anda</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sukses -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Penyewaan Berhasil!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Ikon Ceklis -->
                    <div class="text-center">
                        <i class="bi bi-check-circle" style="font-size: 50px; color: green;"></i>
                        <p id="successMessage">Penyewaan berhasil! Terima kasih telah melakukan penyewaan.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Car categories End -->

    <!-- Car Steps Start -->
    <div class="container-fluid steps py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize text-white mb-3">Flexigadget <span
                        class="text-primary">Process</span></h1>
                <p class="mb-0 text-white">
                    Ikuti langkah-langkah mudah berikut untuk meminjam barang dengan kami. Proses yang cepat dan mudah
                    hanya dalam beberapa langkah:
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="steps-item p-4 mb-4">
                        <h4>Step 1: Choose Your Item</h4>
                        <p class="mb-0">Pilih barang yang ingin Anda pinjam dari daftar kami. Pastikan untuk memeriksa
                            deskripsi dan ketersediaan barang.</p>
                        <div class="steps-number">01.</div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="steps-item p-4 mb-4">
                        <h4>Step 2: Fill Out The Loan Form</h4>
                        <p class="mb-0">Isi formulir peminjaman dengan informasi lengkap dan pastikan data yang
                            diberikan akurat untuk mempermudah proses.</p>
                        <div class="steps-number">02.</div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="steps-item p-4 mb-4">
                        <h4>Step 3: Confirmation & Pickup</h4>
                        <p class="mb-0">Setelah formulir Anda diverifikasi, Anda akan menerima konfirmasi dan dapat
                            mengambil barang yang dipinjam di lokasi yang telah ditentukan.</p>
                        <div class="steps-number">03.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Car Steps End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Flexigadget <span class="text-primary">Blog & News</span>
                </h1>
                <p class="mb-0">Temukan berita terbaru dan artikel terkait dengan penyewaan handphone dan laptop, tips
                    memilih perangkat, dan informasi lainnya yang berguna untuk Anda. Tetap terinformasi dengan
                    pembaruan terbaru kami!</p>
            </div>
            <div class="row g-4">
                <!-- Blog Item 1 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog1.png" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">30 Dec 2025</div>
                            <div class="blog-comment my-3">
                                <div class="small"><span class="fa fa-user text-primary"></span><span
                                        class="ms-2">Admin</span></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span><span
                                        class="ms-2">8 Comments</span></div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">How to Choose the Best Laptop for Rent</a>
                            <p class="mb-3">Mencari laptop yang tepat untuk kebutuhan Anda? Pelajari cara memilih laptop
                                yang sesuai dengan spesifikasi dan anggaran Anda dari berbagai pilihan yang tersedia
                                untuk disewa.</p>
                            <a href="#" class="">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item 2 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/mix.png" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">25 Dec 2025</div>
                            <div class="blog-comment my-3">
                                <div class="small"><span class="fa fa-user text-primary"></span><span
                                        class="ms-2">Admin</span></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span><span
                                        class="ms-2">4 Comments</span></div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Understanding the Rental Cost for High-End Phones</a>
                            <p class="mb-3">Menyewa handphone premium bisa lebih terjangkau daripada membeli. Cari tahu
                                tentang biaya sewa berbagai tipe Dddan cara mendapatkan penawaran terbaik.</p>
                            <a href="#" class="">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item 3 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/dok.png" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">27 Dec 2025</div>
                            <div class="blog-comment my-3">
                                <div class="small"><span class="fa fa-user text-primary"></span><span
                                        class="ms-2">Admin</span></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span><span
                                        class="ms-2">3 Comments</span></div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Documents You Need to Rent a Laptop or Phone</a>
                            <p class="mb-3">Persiapkan dokumen yang diperlukan untuk menyewa handphone atau laptop.
                                Pastikan Anda mengetahui syarat dan ketentuan agar proses penyewaan berjalan lancar.</p>
                            <a href="#" class="">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Blog End -->

    <!-- Banner Start -->
    <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="banner-item rounded">
                <img src="img/Apple_iPhone_15_Pro___iPhone_15_Pro__Max-removebg-preview.png"
                    class="img-fluid rounded w-100" alt="Gambar Banner">
                <div class="banner-content">
                    <h2 class="text-primary">Sewa Handphone & Laptop</h2>
                    <h1 class="text-white">Tertarik Menyewa?</h1>
                    <p class="text-white">Jangan ragu, hubungi kami sekarang untuk menyewa perangkat Anda!</p>
                    <div class="banner-btn">
                        <a href="https://wa.me/+6281573635413?text=Halo%20saya%20tertarik%20untuk%20menyewa%20handphone%20atau%20laptop.%20Mohon%20informasi%20lebih%20lanjut."
                            class="btn btn-success rounded-pill py-3 px-4 px-md-5 me-2">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="kontak-kami.html" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">
                            <i class="fas fa-phone-alt"></i> Hubungi Kami
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- Banner End -->

    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Pusat <span class="text-primary">Dukungan Pelanggan</span>
                </h1>
                <p class="mb-0">Jika Anda membutuhkan bantuan terkait penyewaan handphone dan laptop, jangan ragu untuk
                    menghubungi tim kami. Kami siap membantu Anda dengan cepat dan efisien!</p>
            </div>

            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="img/rehan.png" class="img-fluid rounded w-100" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>Martin Doe</h4>
                            <p>Customer Support Specialist</p>
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="img/pall.png" class="img-fluid rounded w-100" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>Alice Johnson</h4>
                            <p>Technical Support Engineer</p>
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="img/adi.png" class="img-fluid rounded w-100" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>David Smith</h4>
                            <p>Customer Service Manager</p>
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team End -->

    <!-- Testimonial Start -->


    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">About Us</h4>
                            <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                        </div>
                        <div class="position-relative">
                            <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Cars</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Car Types</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Team</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Business Hours</h4>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Mon - Friday:</h6>
                            <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Saturday:</h6>
                            <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Vacation:</h6>
                            <p class="text-white mb-0">All Sunday is our vacation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i>UniversitarBinaSaranaInformatika, Karawang,
                            Jawa Barat</a>
                        <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> flexigadget@gamil.com</a>
                        <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> 081573635413</a>
                        <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> 081573635413</a>
                        <div class="d-flex">
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i
                                    class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-0" href="#"><i
                                    class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>FlexiGadget</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com/">HTML Codex</a>
                    Distributed By <a class="border-bottom text-white" href="https://themewagon.com/">FlexiGadget</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize rental modal
            const rentalModal = document.getElementById("rentalModal");
            const bookNowButtons = document.querySelectorAll(".btn-primary[data-bs-toggle='modal']");
            const rentalHargaInput = document.getElementById("rentalHarga");
            const durasiInput = document.getElementById("renterDurasi");

            // Price mapping for each device
            const devicePrices = {
                "iPhone 15 Plus": 900000,
                "Samsung S24 Ultra": 1300000,
                "Asus TUF": 980000,
                "Macbook M3 Air": 2100000
            };

            // Book Now button event listeners
            bookNowButtons.forEach(button => {
                button.addEventListener("click", function () {
                    const deviceName = this.getAttribute("data-device");
                    document.getElementById("deviceName").value = deviceName;

                    // Set initial price
                    const basePrice = devicePrices[deviceName];
                    rentalHargaInput.value = basePrice;

                    // Update price when duration changes
                    durasiInput.addEventListener("input", function () {
                        const duration = parseInt(this.value) || 0;
                        const totalPrice = basePrice * duration;
                        rentalHargaInput.value = totalPrice;
                    });
                });
            });

            // Set user name if available
            const userName = document.querySelector('meta[name="user-name"]')?.content;
            if (userName) {
                document.getElementById("renterName").value = userName;
            }

            // Form submission handler using jQuery
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#rentalForm').on('submit', function (e) {
                    e.preventDefault();

                    // Show loading modal
                    $('#loadingModal').modal('show');

                    const formData = $(this).serialize();
                    console.log("Data yang dikirim:", formData);

                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function (response) {
                            // Hide loading modal after 2 seconds
                            setTimeout(function () {
                                $('#loadingModal').modal('hide');
                                console.log("Response dari server:", response);

                                let message = response.message || "Penyewaan berhasil!";

                                // Cek jika API WA gagal
                                if (response.wa_response && response.wa_response.status !== 'success') {
                                    message += " Namun, pesan WhatsApp gagal dikirim.";
                                }

                                if (!response.message) {
                                    const tanggalSewa = new Date($('#tanggal_sewa').val());
                                    const durasi = parseInt($('#durasi').val());
                                    tanggalSewa.setDate(tanggalSewa.getDate() + durasi);
                                    const tanggalSelesai = tanggalSewa.toISOString().split('T')[0];

                                    message = `Penyewaan berhasil! Anda menyewa selama ${durasi} hari. Jangan lupa untuk di kembalikan ya guys. Sewa berakhir pada: ${tanggalSelesai}.`;

                                    // Tambahkan info WA jika gagal
                                    if (response.wa_response && response.wa_response.status !== 'success') {
                                        message += " Namun, pesan WhatsApp gagal dikirim.";
                                    }
                                }

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Penyewaan Berhasil!',
                                    text: message,
                                    confirmButtonText: 'Tutup',
                                    timer: 5000
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            }, 2000); // Show loading for 2 seconds
                        },
                        error: function (xhr) {
                            $('#loadingModal').modal('hide');
                            console.log("Error Response:", xhr.responseJSON);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Terjadi kesalahan. Periksa kembali input.'
                            });
                        }
                    });

                });
            });
        });
    </script>







    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from themewagon.github.io/Cental/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2025 06:01:48 GMT -->

</html>