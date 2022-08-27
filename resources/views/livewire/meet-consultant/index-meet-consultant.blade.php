<div>
    <div class="main-content">
        <section class="section">
    
        @include('components.header-app', ['title' => 'Janji Temu Konsultan'])
    
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input wire:model.defer="search" type="text" class="form-control" placeholder="Cari berdasar lokasi atau nama" aria-label="">
                            <div class="input-group-append">
                                <button wire:click="updateSearch" class="btn btn-primary" type="button"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div><h4>Cari Berdasar Lokasi</h4></div>
                        <div class="card-header-action">
                            <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="collapse show" id="mycard-collapse">
                        <div class="card-body p-0">
                            <div class="m-4">
                                @foreach ($provinces as $province)
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" value="{{ $province->name }}" wire:model="search" id="customRadio{{ $loop->iteration }}" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio{{ $loop->iteration }}">{{ $province->name }}</label>
                                </div>    
                                @endforeach    
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-9 col-sm-12 bg-light">
                <div class="bg-light pt-2">
                    @foreach ($consultants as $consultant)
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 col-md-2 col-sm-2">
                                    <img src="https://source.unsplash.com/100x100?profile" alt="">
                                </div>
                                <div class="col-5 col-md-8 col-sm-7">
                                    <div>
                                        <h6 class="text-primary m-0">{{ $consultant->user->name }}</h6>
                                        <p class="text-muted">{{ $consultant->specialist }}</p>        
                                    </div>
                                    <div>
                                        <h6 class="text-primary m-0">{{ $consultant->consultantOffice->name }}</h6>
                                        <p class="text-muted m-0">{{ $consultant->full_address }}, {{ $consultant->city }}, {{ $consultant->province }}</p>        
                                    </div>
                                </div>
                                <div class="col-3 col-md-2 col-sm-3">
                                    <h6 class="mb-4">Rp {{ $consultant->price }}</h6>
                                    <a href="{{ route('show.meet-consultant', ['infoConsultant' => $consultant->slug]) }}" class="btn btn-sm btn-primary">Buat Janji    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </section>
    </div>

    <script>
        window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            window.livewire.emit('load-more');
        }
        };
    </script>
</div>
