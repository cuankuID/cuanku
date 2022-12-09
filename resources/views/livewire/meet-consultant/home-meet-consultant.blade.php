@section('title', 'Cuanku | Janji Temu Konsultan')

<div>
    <div class="main-content">
        <section class="section">
        @include('components.header-app', ['title' => 'Janji Temu Konsultan'])

            <div class="row">
                <div class="col-12 col-md-5 col-sm-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tentang Layanan</h4>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('assets/img/illustrations/Group14.png') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/illustrations/Group15.png') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/illustrations/Group16.png') }}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <hr>
                            <p>Pada layanan ini anda dapat memilih konsultan sesuai yang anda butuhkan dan melakukan penjadwalan untuk bertemu dan konsultasi secara langsung.</p>
                            <p class="text-primary font-weight-bold">Tata cara :</p>
                            <ul>
                                <li>Pilih Konsultan yang sesuai dengan anda</li>
                                <li>Pilih jadwal pertemuan yang sesuai dan tersedia dan lakukan pembayaran</li>
                                <li>Bertemu dan Konsultasi</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-7 col-sm-7">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div>
                                <h4>Konsultan</h4>
                            </div>
                            <div class="card-header-action">
                                <a href="{{ route('index.meet-consultant') }}" class="btn btn-primary btn-icon icon-right">Cari Lebih Banyak <i class="fas fa-search"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme" id="users-carousel">
                                @foreach ($consultants as $consultant)
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">{{ $consultant->user->name }}</div>
                                            <div class="text-job text-muted">{{ $consultant->specialist }}</div>
                                            <div class="user-cta">
                                                <a href="{{ route('show.meet-consultant', ['infoConsultant' => $consultant->slug]) }}" class="btn btn-primary">Buat Janji</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
