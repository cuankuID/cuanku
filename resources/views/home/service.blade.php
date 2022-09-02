@extends('layouts.main')

@section('title', 'Cuanku | Layanan Kami')

@section('content')
<section class="wrapper bg-primary">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-5 text-white">Layanan Kami</h1>
                <p class="lead fs-lg mb-10 text-info">- Layanan Cuan.ku Indonesia -</p>
            </div>
        </div>
    </div>
    {{-- <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="./assets/img/photos/bg2.jpg" alt="" /></figure> --}}
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-8">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow"><img src="./assets/img/photos/live-consultation.png" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="./assets/img/photos/live-consultation-2.png" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/icons/lineal/chat.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-3">Konsultasi Online</h2>
                <p class="lead fs-lg">Konsultasi secara online dengan para konsultan yang ahli di bidangnya</p>
                <p class="mb-6">
                    Kami menyediakan sebuah sebuah layanan untuk para user berkonsultasi secara online dengan para konsultan finansial yang ahli sesuai expertise di bidangnya.
                    User dapat mencari dan memilih konsultan pilihannya berdasarkan. Lalu user dapat berkonsultasi dengan fitur <i>live chat</i> yang telah disediakan.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-gray">
    <div class="container py-14 py-md-8">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow"><img src="{{ asset('assets/img/photos/consultation.png') }}" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="{{ asset('assets/img/photos/consultation-2.png') }}" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/icons/lineal/meeting.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-3">Konsultasi Langsung</h2>
                <p class="lead fs-lg">Konsultasi secara langsung bertemu dengan para konsultan yang ahli di bidangnya</p>
                <p class="mb-6">
                    Kami menyediakan sebuah sebuah layanan untuk para user berkonsultasi secara langsung dengan para konsultan finansial yang ahli sesuai expertise di bidangnya.
                    User dapat mencari, memilih, dan menjadwalkan untuk secara langsung bertemu dengan konsultan pilihannya.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-8">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow"><img src="./assets/img/photos/office-2.png" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="./assets/img/photos/office.png" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/icons/lineal/search.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-3">Cari Kantor Konsultan</h2>
                <p class="lead fs-lg">Cari kantor konsultan berdasarkan jenis dan lokasi kantor yang diinginkan</p>
                <p class="mb-6">
                    Kami menyediakan sebuah sebuah layanan untuk mencari kantor konsultan sesuai jenis dan lokasi yang terdekat atau yang diinginkan.
                    User dapat juga melihat informasi singkat dari kantor konsultan tersebut berserta para konsultan yang bersangkutan di kantor konsultan tersebut.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection