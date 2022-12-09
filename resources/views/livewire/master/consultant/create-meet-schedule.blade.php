@section('title', 'Cuanku | Buat Jadwal Konsultasi Online')

<div>
    <div class="main-content">
        <section class="section">
            @include('components.header-app', ['title' => 'Tambah Jadwal Temu Konsultan'])
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Konsultan</h4>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-2 col-sm-4">
                                        <p><b>Nama</b></p>
                                        <p><b>Alamat</b></p>
                                        <p><b>Kantor</b></p>
                                    </div>

                                    <div class="col-6 col-md-6 col-sm-8">
                                        <p>: {{ $infoConsultant->user->name }} <b>({{ $infoConsultant->specialist }})</b></p>
                                        <p>: {{ $infoConsultant->full_address }}, {{ $infoConsultant->city }}, {{ $infoConsultant->province }}</p>
                                        <p>: {{ $infoConsultant->consultantOffice->name }}</p>
                                    </div>    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Jadwal Live Konsultasi</h4>
                        </div>
                        <form wire:submit.prevent="saveLiveConsultation">
                            <div class="card-body"> 
                                <div class="form-group col-md-6">
                                    <label>Hari Available</label>
                                    <div wire:ignore>
                                        <select class="form-control @error('province') is-invalid @enderror" wire:model.defer="day" required>
                                            <option selected></option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                        </select>
                                    </div>
                                    @error('province') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Jam Mulai</label>
                                        <input wire:model.defer="start_time" type="time" class="form-control @error('time') is-invalid @enderror" required>
                                        @error('time') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Jam Selesai</label>
                                        <input wire:model.defer="end_time" type="time" class="form-control @error('time') is-invalid @enderror" required>
                                        @error('time') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Tambahkan Jadwal</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Jadwal Konsultasi Temu Langsung</h4>
                        </div>
                        <form wire:submit.prevent="saveMeetConsultation">
                            <div class="card-body"> 
                                <div class="form-group col-md-6">
                                    <label>Hari Available</label>
                                    <div wire:ignore>
                                        <select class="form-control @error('province') is-invalid @enderror" wire:model.defer="day" required>
                                            <option selected></option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                        </select>
                                    </div>
                                    @error('province') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>Jam Available</label>
                                    <input wire:model.defer="time" type="time" class="form-control @error('time') is-invalid @enderror" required>
                                    @error('time') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Tambahkan Jadwal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    @if($infoConsultant->liveConsultationSchedule->count())
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Jadwal Live Konsultasi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($liveSchedules as $schedule)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $schedule->day }}</td>
                                            <td>{{ $schedule->start_time }} - {{ $schedule->end_time }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-danger" wire:click.prevent="deleteLiveConfirmation({{ $schedule->id }})">Hapus Jadwal</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-light">Belum ada jadwalkan yang ditambahkan!</div>
                    @endif
                </div>

                <div class="col-12 col-md-6">
                    @if($infoConsultant->meetConsultationSchedule->count())
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Jadwal Konsultasi Temu Langsung</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($meetSchedules as $schedule)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $schedule->day }}</td>
                                            <td>{{ $schedule->time }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-danger" wire:click.prevent="deleteMeetConfirmation({{ $schedule->id }})">Hapus Jadwal</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-light">Belum ada jadwalkan yang ditambahkan!</div>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>

@push('script')
<script>
    window.addEventListener('show-delete-meet-confirmation', event => {
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteMeetConfirmed')
        }
        })
    })

    window.addEventListener('deleted-meet-confirmation', event => {
        Swal.fire(
            'Deleted!',
            'This data has been deleted.',
            'success'
        )
    })

    window.addEventListener('show-delete-live-confirmation', event => {
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteLiveConfirmed')
        }
        })
    })

    window.addEventListener('deleted-live-confirmation', event => {
        Swal.fire(
            'Deleted!',
            'This data has been deleted.',
            'success'
        )
    })
</script>
@endpush
