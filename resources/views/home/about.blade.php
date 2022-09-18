@extends('layouts.main')

@section('title', 'Cuanku | Tentang Kami')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{ asset('assets/img/photos/bg3.jpg') }}">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-5 text-white">Cuan.ku Indonesia</h1>
                <p class="lead fs-lg mb-15 text-info">“Your Finance Solution with Cuan.ku Indonesia”</p>
            </div>
        </div>
    </div>
    {{-- <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="./assets/img/photos/bg2.jpg" alt="" /></figure> --}}
</section>

<section class="wrapper bg-light angled">
    <div class="container py-7 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-10 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                    <figure class="rounded shadow d-none d-sm-block"><img src="./assets/img/photos/about2.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                    </div>
                    <div class="item">
                    <figure class="rounded shadow"><img src="./assets/img/photos/about3.jpg" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="./assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-3">Cuan.ku</h2>
                <p class="lead fs-lg">Cuanku sebuah startup yang membantu memberikan konsultasi di bidang finansial</p>
                <p class="mb-6">Kami menyediakan platform untuk bisa mempertemukan antara end-user dengan para ahli konsultan di bidang finansial untuk mereka dapat berkomunikasi dan memberikan solusi untuk masalah yang dihadapi oleh para end-user</p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-gray angled upper-start">
    <div class="container py-7 py-md-8">
        <div class="row mb-5">
            <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-4 px-lg-14">Beberapa Layanan Kami</h2>
            </div>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="card me-lg-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                            <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">01</span></span>
                            </div>
                            <div>
                            <h4 class="mb-1">Konsultasi Langsung</h4>
                            <p class="mb-0">User bertemu untuk berkonsultasi dengan konsultan</p>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="card ms-lg-13 mt-6">
                <div class="card-body p-6">
                    <div class="d-flex flex-row">
                        <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">02</span></span>
                        </div>
                        <div>
                        <h4 class="mb-1">Konsultasi Online</h4>
                        <p class="mb-0">User berkonsultasi secara online dengan konsultan</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.card -->
            <div class="card mx-lg-6 mt-6">
                <div class="card-body p-6">
                <div class="d-flex flex-row">
                    <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">03</span></span>
                    </div>
                    <div>
                    <h4 class="mb-1">Cari Kantor Konsultan</h4>
                    <p class="mb-0">User dapat mencari kantor konsultan yang sesuai</p>
                    </div>
                </div>
                </div>
                <!--/.card-body -->
            </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-6 mb-3">Bagaimana Kami Bekerja?</h2>
                <p class="lead fs-lg pe-lg-5">Kami menggunakan platform yang kami punya untuk menjalankan bisnis kami.</p>
                <p>Cuanku.id Indonesia menyediakan 3 layanan yang dapat digunakan oleh para user. Beberapa layanan kami : Cari Kantor Konsultan, Konsultasi Online, Konsultasi Langsung</p>
                <p class="mb-6"></p>
                <a href="/about" class="btn btn-primary rounded-pill mb-0">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
@endsection