@extends('depan.template.content')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Web Pariwisata Belitung</span></h2>
                <p class="animate__animated animate__fadeInUp">Website ini Menyediakan informasi terkait tempat wisata yang ada di Kabupaten Belitung</p>
                <a href="#services" class="btn-get-started animate__animated animate__fadeInUp">Jelajahi sekarang</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Informasi Tempat Wisata</h2>
                <p class="animate__animated animate__fadeInUp">Petualang dimulai darisini</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Cari Rute</a>
            </div>
        </div>


        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->
@endsection

@section('main')
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>Daftar Wisata</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box icon-box-pink">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box icon-box-cyan">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-green">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-blue">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Services Section -->
@endsection