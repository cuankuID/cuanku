@section('title', 'Cuanku | Buat Jadwal Konsultasi Online')

<div>
    <div>
        <div class="main-content">
            <section class="section">
                @include('components.header-app', ['title' => 'Buat Jadwal Konsultasi'])
                
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('create.meet-consultation-schedule') }}"><i class="fas fa-user-tie"></i> Jadwal Konsultasi Temu Langsung</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="{{ route('create.live-consultation-schedule') }}"><i class="fas fa-laptop-medical"></i> Jadwal Live Konsultasi</a>
                            </li>
                        </ul>
                    </div>
                    <form wire:submit.prevent="save">
                        <div class="card-body">
                            <h2 class="section-title mt-0">Jadwal Live Konsultasi</h2>
                            <p class="section-lead">
                                Buat Jadwal Available Live Konsultasi anda disini!
                            </p>
                            <div class="row mt-4">
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
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Jam Mulai</label>
                                    <input wire:model.defer="start_time" type="time" name="start_time" class="form-control @error('start_time') is-invalid @enderror" required>
                                    @error('start_time') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jam Akhir</label>
                                    <input wire:model.defer="end_time" type="time" name="end_time" class="form-control @error('end_time') is-invalid @enderror" required>
                                    @error('end_time') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Tambahkan Jadwal</button>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12">
                        @if($schedules->count())
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Jadwal</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Hari</th>
                                            <th>Waktu Mulai</th>
                                            <th>Waktu Selesai</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($schedules as $schedule)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $schedule->day }}</td>
                                                <td>{{ $schedule->start_time }}</td>
                                                <td>{{ $schedule->end_time }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger" wire:click.prevent="deleteConfirmation({{ $schedule->id }})">Hapus Jadwal</button>
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
</div>

@push('script')
<script>
    window.addEventListener('show-delete-confirmation', event => {
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
            Livewire.emit('deleteConfirmed')
        }
        })
    })

    window.addEventListener('deleted-confirmation', event => {
        Swal.fire(
            'Deleted!',
            'This data has been deleted.',
            'success'
        )
    })
</script>
@endpush