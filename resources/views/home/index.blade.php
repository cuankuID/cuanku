@extends('layouts.main')

@section('title', 'Cuanku | Home')

@section('content')
<section class="wrapper bg-light">
    <div class="container pt-10 pt-md-14 pb-14 pb-md-16 text-center">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-14 align-items-center">
            <div class="col-lg-6 order-lg-2">
            <figure><img class="img-auto" src="{{ asset('assets/img/illustrations/i21.png') }}" srcset="./assets/img/illustrations/i21@2x.png 2x" alt="" /></figure>
            </div>
            <!-- /column -->
            <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 text-center text-lg-start">
            <h1 class="display-1 fs-54 mb-5 mx-md-n5 mx-lg-0 mt-7">Dapatkan Pelayanan <br class="d-md-none"><span class="rotator-fade text-primary">Finansial, Pajak, Investasi</span> Terbaik Dari Manapun</h1>
            <p class="lead fs-lg mb-7">“Your Finance Solution with Cuan.ku Indonesia”</p>
            <span><a class="btn btn-lg btn-primary rounded-pill me-2">Get Started</a></span>
            </div>
            <!-- /column -->
        </div>
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
        <div class="divider text-soft-primary mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
            <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
            </svg>
        </div>
    </div>
</section>

<section class="wrapper bg-gradient-primary">
    <div class="container pt-12 pt-lg-8 pb-14 pb-md-17">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-16 text-uppercase text-primary mb-3">Apa Layanan Kami?</h2>
            <h3 class="display-3 mb-10 px-xxl-10">Kami menyediakan platform untuk mencari konsultan keuangan</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">
        <div class="col-lg-4">
            <div class="px-md-15 px-lg-3">
                <figure class="mb-6"><img class="img-fluid" src="./assets/img/illustrations/i24.png" srcset="./assets/img/illustrations/i24@2x.png 2x" alt="" /></figure>
                <h3>Konsultasi Online</h3>
                <p class="mb-2">Kami menyediakan layanan untuk berkonsultasi secara online dengan fitur <i>live chat</i></p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/.px -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
            <div class="px-md-15 px-lg-3">
                <figure class="mb-6"><img class="img-fluid" src="./assets/img/illustrations/i19.png" srcset="./assets/img/illustrations/i19@2x.png 2x" alt="" /></figure>
                <h3>Konsultasi Langsung</h3>
                <p class="mb-2">Kami menyediakan layanan bagi para pengguna kami untuk bisa menjadwalkan pertemuan konsultasi secara langsung</p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/.px -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
            <div class="px-md-15 px-lg-3">
                <figure class="mb-6"><img class="img-fluid" src="./assets/img/illustrations/i18.png" srcset="./assets/img/illustrations/i18@2x.png 2x" alt="" /></figure>
                <h3>Cari Kantor Konsultan</h3>
                <p class="mb-2">Kami menyediakan layanan untuk mencari lokasi beserta info kantor konsultan yang tersedia di Indonesia</p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/.px -->
        </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <h2 class="display-4 mb-3 text-center">Artikel Terbaru</h2>
        <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">Update info dan tips dari artikel terbaru tentang keuangan dari Cuanku</p>
        <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($posts as $post)
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Lihat Selengkapnya</h5>
                            </figcaption>
                            </figure>
                            <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">{{ $post->category->name }}</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">{{ $post->title }}</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                            <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->created_at }}</span></li>
                            </ul>
                            <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
        <h3 class="display-5 mb-5">Team Cuanku Indonesia</h3>
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-12">
            <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($teams as $team)
                        <div class="swiper-slide">
                            @if ($team->image)
                            <img class="rounded-circle w-20 mx-auto mb-4" src="{{ asset('storage/' . $team->image) }}" class="card-img-top" alt="...">
                            @else
                            <img class="rounded-circle w-20 mx-auto mb-4" src="{{ asset('assets/img/avatars/t1.jpg') }}" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" />
                            @endif
                            <h4 class="mb-1">{{ $team->name }}</h4>
                            <div class="meta mb-2">{{ $team->position }}</div>
                            <nav class="nav social justify-content-center text-center mb-0">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-slack"></i></a>
                                <a href="#"><i class="uil uil-linkedin"></i></a>
                            </nav>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection