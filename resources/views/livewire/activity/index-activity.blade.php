<div>
    <div class="main-content">
        <section class="section">
            @include('components.header-app', ['title' => 'Aktivitas Pesanan'])

            <h2 class="section-title">Aktitivitas Pesanan</h2>
            <p class="section-lead">
                Disini anda bisa melihat semua list pesanan yang telah dibuatw beserta status dan infonya!
            </p>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-primary">Order List</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Konsultasi Temu Langsung</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Live Konsultasi</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li> --}}
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9 bg-light">
                                <div class="tab-content no-padding" id="myTab2Content">
                                <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                    <div class="row mt-2">
                                        <div class="col-12 col-md-12">
                                            @foreach ($meetConsultationOrders as $meetConsultationOrder)
                                            <div class="card shadow my-3">
                                                <div class="card-header">
                                                    <div>
                                                    <h4 class="text-dark"><strong>Konsultan</strong> : <span></span>{{ $meetConsultationOrder->consultant->name }}</h4>
                                                    </div>
                                                    <div class="ml-3">
                                                        <a href="" class="btn btn-sm btn-info"><i class="fas fa-search"></i></a>
                                                    </div>
                                                    <div class="card-header-action">
                                                        <div class="dropdown">
                                                            <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Options</a>
                                                            <div class="dropdown-menu">
                                                                <a href="{{ route('pay.meet-consultation', ['meetConsultationOrder' => $meetConsultationOrder->no_order]) }}" class="dropdown-item has-icon text-success"><i class="fas fa-credit-card"></i> <b>Bayar</b></a>
                                                                <a href="{{ route('invoice.activity', ['meetConsultationOrder' => $meetConsultationOrder->no_order]) }}" class="dropdown-item has-icon text-info" target="_blank"><i class="fas fa-file-invoice"></i> <b>Invoice</b></a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="" class="dropdown-item has-icon text-danger" wire:click.prevent="deleteConfirmation({{ $meetConsultationOrder->id }})"><i class="fas fa-times"></i> <b>Cancel</b></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-4 col-md-4 col-sm-4">
                                                            <p class="mb-0"><b>No.Order</b></p>
                                                            <p class="mb-0"><b>Jadwal Konsultasi</b></p>
                                                            <p class="mb-0"><b>Alamat Konsultasi</b></p>
                                                            <p class="mb-0"><b>Status</b></p>
                                                        </div>
                                                        <div class="col-4 col-md-4 col-sm-4">
                                                            <p class="mb-0">: #{{ $meetConsultationOrder->no_order }}</p>
                                                            <p class="mb-0">: {{ $meetConsultationOrder->date }}</p>
                                                            <p>: </p>
                                                            <p>: 
                                                                @if ($meetConsultationOrder->status == 'Menunggu Pembayaran')
                                                                <span class="badge badge-warning">Menunggu Pembayaran</span>
                                                                @else
                                                                <span class="badge badge-primary">Diterima</span>
                                                                @endif
                                                            </p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
