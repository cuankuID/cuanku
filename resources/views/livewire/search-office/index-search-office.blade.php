@section('title', 'Cuanku | Cari Kantor Konsultan')

<div>
    <div class="main-content">
        <section class="section">
    
        @include('components.header-app', ['title' => 'Cari Kantor Konsultan'])
    
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

            <div class="col-12 col-9 col-sm-9">
                @foreach ($offices as $office)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 col-md-2 col-sm-4">
                                @if ($office->image)
                                <img src="{{ asset('storage/' . $office->image) }}" alt="" style="width: 100%;width: 100px;object-fit: cover;object-position: center">
                                @else
                                <img src="https://source.unsplash.com/100x100?hospital" alt="">
                                @endif
                            </div>
                            <div class="col-5 col-md-8 col-sm-4">
                                <h6 class="text-primary">{{ $office->name }}</h6>
                                <p class="text-muted">{{ $office->city->name }}, {{ $office->province->name }}</p>    
                            </div>
                            <div class="col-3 col-md-2 col-sm-4">
                                <a href="{{ route('show.search-office', ['consultantOffice' => $office->slug]) }}" class="btn btn-sm btn-primary">Lihat Lengkap</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div wire:loading.block wire:target="perPage" wire:key="perPage"><i class="fa fa-spinner fa-spin mt-2 ml-2 mb-2"></i> Loading</div> --}}
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
