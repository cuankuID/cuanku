@section('title', 'Cuanku | Konsultasi Online')

<div>
    <div class="main-content">
        <section class="section">
    
        @include('components.header-app', ['title' => 'Live Konsultasi'])
    
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
                            <input wire:model.defer="search" type="text" class="form-control" placeholder="Cari berdasar nama, spesialis, atau yang lainnya" aria-label="">
                            <div class="input-group-append">
                                <button wire:click="updateSearch" class="btn btn-primary" type="button"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="section-title ml-2 my-2">Cari berdasar Spesialis Konsultan</div>
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <div class="selectgroup selectgroup-pills">
                        @foreach ($specialists as $specialist)
                        <label class="selectgroup-item">
                            <input wire:model="search" type="radio" name="value" value="{{ $specialist->name }}" class="selectgroup-input">
                            <span class="selectgroup-button h-50">{{ $specialist->name }}</span>
                        </label>    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($consultants as $consultant)
            <div class="col-12 col-md-6 col-sm-12">
                <div class="card mb-2">
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
                                {{-- @if ($consultant->liveConsultationSchedule->start_time <= $currentTime && $currentTime <= $consultant->liveConsultationSchedule->end_time)
                                    
                                @endif --}}
                                <a href="{{ route('show.live-consultation', ['infoConsultant' => $consultant->slug]) }}" class="btn btn-sm btn-primary"><i class="fas fa-comments"></i> Chat</a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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

@push('script')
<script>
    window.livewire.on('toggleInfoConsultantModal', () => $('#info-consultant-modal').modal('toggle'));
</script>
@endpush