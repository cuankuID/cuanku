<div>
    <div class="main-content">
        <section class="section">
            @include('components.header-app', ['title' => 'Order'])
            
            <h2 class="section-title">Aktitivitas Pesanan</h2>
            <p class="section-lead">
                Disini anda bisa melihat semua list pesanan yang diterima!
            </p>

            @if ($orders->count())
            @foreach ($orders as $order)
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                            <h4>{{ $order->customer->name }}</h4>
                            </div>
                            <div class="ml-3">
                                @if ($order->status == 'Menunggu Pembayaran')
                                <span class="badge badge-warning">Menunggu Pembayaran</span>
                                @else
                                <span class="badge badge-primary">Diterima</span>
                                @endif
                            </div>
                            <div class="card-header-action">
                            <div class="dropdown">
                                <form action="{{ route('activity.cancel', ['meetConsultationOrder' => $order->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> Cancel</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 col-md-4 col-sm-4">
                                    <p class="mb-0"><b>No.Order</b></p>
                                    <p class="mb-0"><b>Jadwal Konsultasi</b></p>
                                    <p class="mb-0"><b>Alamat Konsultasi</b></p>
                                </div>
                                <div class="col-4 col-md-4 col-sm-4">
                                    <p class="mb-0">: {{ $order->no_order }}</p>
                                    <p class="mb-0">: {{ $order->date }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p class="alert alert-info">Belum ada pesanan yang diterima!</p>
            @endif
        </section>
    </div>
</div>
