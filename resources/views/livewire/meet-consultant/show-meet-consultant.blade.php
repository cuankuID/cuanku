@section('title', 'Cuanku | ' . $infoConsultant->user->name)

<div>
    <div class="main-content">
        <section class="section">

        @include('components.header-app', ['title' => $infoConsultant->user->name])

            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-12 col-md-7 col-sm-7">
                                    <img class="img-fluid" src="https://source.unsplash.com/600x400?profile" alt="">
                                    <hr>
                                </div>
                                
                                <div class="col-12 col-md-5 col-sm-5">
                                    <div class="date-section">
                                        <h6 class="text-primary">Pilih Tanggal Konsultasi dan Kunjungan</h6>
                                        <hr>
                                        <div class="card card-primary shadow-primary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="selectgroup">
                                                        <div class="row">
                                                            @foreach ($periods as $date)
                                                            @if ($date->format('l') != 'Saturday' && $date->format('l') != 'Sunday')
                                                            <label class="selectgroup-item col-4 col-md-3 px-1">
                                                                <input type="radio" name="date" wire:model="date" wire:click="resetTime" value="{{ $date->format('d-m-Y') }}" class="selectgroup-input">
                                                                <span class="selectgroup-button shadow-sm overflow-hidden"><small>{{ $date->format('l, d F') }}</small></span>
                                                            </label>
                                                            @endif    
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-12 col-md-7">
                                                    <label>Pilih Tanggal Lain</label>
                                                    <div class="input-group mb-3">
                                                        <input wire:model="date" wire:click="resetTime" name="date" type="date" class="form-control" placeholder="" aria-label="">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button">Check</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="time-section">
                                        <h6 class="text-primary">Pilih Waktu</h6>
                                        <small class="text-muted"><i class="fas fa-info-circle"></i> jika pilihan waktu tidak muncul silahkan pilih hari lain!</small>
                                        <hr>
                                        <div class="form-group">
                                            <div class="selectgroup">
                                                <div class="row">
                                                    @if ($timeList)
                                                    @foreach ($timeList as $times)
                                                    <label class="selectgroup-item">    
                                                        <input wire:model="time" type="radio" value="{{ $times->time }}" name="time" class="selectgroup-input">
                                                        <span class="selectgroup-button h-auto shadow-sm">{{ $times->time }}</span>
                                                    </label>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="text-primary">Lokasi</h6>
                                    <hr>
                                    <div class="card bg-primary">
                                        <div class="card-body">
                                            <h6>{{ $infoConsultant->consultantOffice->name }}</h6>
                                            <p>{{ $infoConsultant->consultantOffice->full_address }}, {{ $infoConsultant->consultantOffice->city->name }}</p>
                                            <a class="text-light" href="{{ route('show.search-office', ['consultantOffice' => $infoConsultant->consultantOffice->slug]) }}"><strong>Lihat Lokasi</strong> <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="fixed-bottom bg-white mb-0" style="box-shadow: 0px 0 7px rgba(77, 77, 77, 0.8); height: 60px;">
                    <div class="row justify-content-center">
                        <div class="col-8 col-md-3">
                            @if ($time)
                            <div class="mt-1">
                                <small>Jadwal dipilih : </small>
                                <h6 class="text-primary mt-1">{{ $dateSelected->format('l, d F Y') }}  ({{ $time }})</h6>    
                            </div>
                            @else
                            <p class="mt-3"><b>Silahkan pilih tanggal dan waktu terlebih dulu!</b></p>
                            @endif    
                        </div>
                        <form wire:submit.prevent="save">
                            <div class="col-3 col-md-2">
                                @if ($time)
                                <button type="submit" class="btn btn-primary mt-2">Jadwalkan</button>
                                @else
                                <button class="btn btn-secondary mt-2" disabled>Jadwalkan</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>