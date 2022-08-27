
<div>
    <div class="main-content">
        <section class="section">
        @include('components.header-app', ['title' => 'Live Konsultasi'])

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
                                        <img class="d-block w-100" src="{{ asset('assets-app/img/news/img01.jpg') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets-app/img/news/img07.jpg') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets-app/img/news/img08.jpg') }}" alt="Third slide">
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
                                <a href="{{ route('index.live-consultation') }}" class="btn btn-primary btn-icon icon-right">Cari Lebih Banyak <i class="fas fa-search"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme" id="users-carousel">
                                {{-- @foreach ($consultants as $consultant) --}}
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name"></div>
                                            <div class="text-job text-muted"></div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('user1 followed');" data-unfollow-action="alert('user1 unfollowed');">Buat Janji</button>
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
    </div>
</div>
