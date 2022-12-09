@section('title', 'Cuanku | ' . $infoConsultant->user->name)

<div>
    <div class="main-content">
        <section class="section">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-primary">{{ $infoConsultant->user->name }}</h5>
                        <hr>
                        <img class="img-fluid" src="https://source.unsplash.com/600x400?profile" alt="">
                        <hr>
                        
                        <p class="badge badge-primary m-2 d-inline"><b>{{$infoConsultant->specialist}}</b></p>
                        <span class="badge badge-secondary"><i class="fas fa-briefcase"></i> {{$infoConsultant->work_experience}}</span>
                        <p>{!! $infoConsultant->biography !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-primary">Paket Live Chat</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <button data-toggle="modal" data-target="#appModal" class="btn btn-primary">Chat Konsultan</button>    
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-money-check"></i> Lihat Subscription</button>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">List Paket Langganan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pricing shadow">
                                <div class="pricing-title">
                                    Silver
                                </div>
                                <div class="pricing-padding">
                                    <div class="pricing-price">
                                    <h3>Rp 50.000</h3>
                                    </div>
                                    <div class="pricing-details">
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                        <div class="pricing-item-label">Live Chat 3x</div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                        <div class="pricing-item-label">Template <br />Laporan Keuangan</div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                        <div class="pricing-item-label">Template Pendataan <br />Operasional</div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                        <div class="pricing-item-label">Template Financial <br />Statement / Budget Plan</div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                        <div class="pricing-item-label">Article Access</div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pricing-cta">
                                    <a href="#">Langganan <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="pricing shadow">
                                <div class="pricing-title">
                                    Gold
                                </div>
                                <div class="pricing-padding">
                                    <div class="pricing-price">
                                    <h3>Rp 100.000</h3>
                                    <div>per month</div>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Live Chat 10x</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Template <br />Laporan Keuangan</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Template Pendataan <br />Operasional</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                            <div class="pricing-item-label">Template Financial <br />Statement / Budget Plan</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Article Access</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-cta">
                                    <a href="#">Langganan <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="pricing shadow">
                                <div class="pricing-title">
                                    Platinum
                                </div>
                                <div class="pricing-padding">
                                    <div class="pricing-price">
                                    <h3>Rp 250.000</h3>
                                    <div>per month</div>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Live Chat Sepuasnya</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Template <br />Laporan Keuangan</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Template Pendataan <br />Operasional</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Template Financial <br />Statement / Budget Plan</div>
                                        </div>
                                        <div class="pricing-item">
                                            <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                            <div class="pricing-item-label">Article Access</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-cta">
                                    <a href="#">Langganan <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <a href="/dashboard/list-subscription" class="btn btn-primary">Cek Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="appModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Live Chat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="mb-2" src="{{ asset('assets/img/illustrations/i15.png') }}" style="width: 400px">
                        <h5 class="text-primary">Silahkan Download Aplikasi kami untuk akses Live Chat</h5>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-primary">Cek Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
</div>
