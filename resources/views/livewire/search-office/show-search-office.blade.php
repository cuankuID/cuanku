@section('title', 'Cuanku | ' . $consultantOffice->name)

<div>
    <div class="main-content">
        <section class="section">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <h4>{{ $consultantOffice->name }}</h4>
                    </div>
                    <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab5" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
                            <i class="fas fa-building"></i> Info Kantor</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">
                            <i class="fas fa-id-card"></i> Konsultan</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact" aria-selected="false">
                            <i class="fas fa-mail-bulk"></i> Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent5">
                        <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
                            <div class="row">
                                <div class="col-12 col-md-7 col-sm-7">
                                    @if ($consultantOffice->image)
                                    <div class="mx-auto">
                                    <img class="img-fluid" src="{{ asset('storage/' . $consultantOffice->image) }}" style="width: 100%;height: 450px;object-fit: cover;object-position: center">
                                    </div>
                                    @else
                                    <img class="img-fluid" src="https://source.unsplash.com/600x400?hospital" alt="">
                                    @endif
                                    <hr>
                                    <div class="mb-4">
                                        <h6 class="text-info"><i class="fas fa-info-circle"></i> Informasi Lainnya</h6>
                                        <p>{!! $consultantOffice->information !!}</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-sm-5">
                                    <h6 class="text-info">Alamat</h6>
                                    <iframe
                                        width="300"
                                        height="300"
                                        frameborder="0" style="border:1"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBUGAEUoSbD7yvjPCFMeRD6OiGaHMLGKLM&q={{ $consultantOffice->lat }},{{ $consultantOffice->long }}"
                                        allowfullscreen>
                                    </iframe>

                                    <a class="btn btn-primary mt-3 d-block" href="https://www.google.com/maps?q={{ $consultantOffice->lat }},{{ $consultantOffice->long }}" target="_blank"><i class="fas fa-map"></i> Buka di Google Map</a>
                                    
                                    <h6 class="mt-3 text-info">Alamat Lengkap :</h6>
                                    <p>{{ $consultantOffice->full_address }}, {{ $consultantOffice->city->name }}, {{ $consultantOffice->province->name }}</p>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                            <div class="row">
                                @foreach ($consultants as $consultant)
                                <div class="col-12 col-md-6 col-sm-12">
                                    <div class="card mb-2 shadow">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 col-md-3 col-sm-3">
                                                    <img src="https://source.unsplash.com/100x100?hospital" alt="">
                                                </div>
                                                <div class="col-5 col-md-6 col-sm-6">
                                                    <h6 class="text-primary">{{ $consultant->user->name }}</h6>
                                                    <p class="text-muted">{{ $consultant->specialist }}</p>
                                                    <span class="badge badge-secondary"><i class="fas fa-briefcase"></i> {{ $consultant->work_experience }}</span>    
                                                </div>
                                                <div class="col-3 col-md-3 col-sm-3">
                                                    <a href="{{ route('show.live-consultation', ['infoConsultant' => $consultant->slug]) }}" class="btn btn-sm btn-primary"><i class="fas fa-comments"></i> Chat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                            <div class="row mb-2">
                                <div class="col-md-1 col-3">
                                    <span class="text-primary"><i class="fas fa-envelope"></i> Email </span>
                                </div>
                                <div class="col">
                                    : <a href="mailto:{{$consultantOffice->email}}">{{$consultantOffice->email}}</a>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-1 col-3">
                                    <span class="text-primary"><i class="fas fa-phone"></i> Telepon </span>
                                </div>
                                <div class="col">
                                    : <span class="text-info">{{$consultantOffice->phone}}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-1 col-3">
                                    <span class="text-primary"><i class="fas fa-globe"></i> Website </span>
                                </div>
                                <div class="col">
                                    : <a href="{{$consultantOffice->website}}" class="text-info">{{$consultantOffice->website}}</a>
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
