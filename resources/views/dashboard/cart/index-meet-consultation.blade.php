@extends('layouts.app')

@section('title', 'Cuanku | Keranjang Pesanan')

@section('content')
<div class="main-content">
	<section class="section">
		@include('components.header-app', ['title' => 'Keranjang Pesanan'])

		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12">
				<div class="card">
					<div class="card-header">
						<div>
							<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#howToPay"><i class="fas fa-info-circle"></i> Cara Pembayaran</button>
						</div>
						<div class="card-header-action">
							<a href="{{route('history.meet.cart')}}" class="btn btn-primary"><i class="fas fa-history"></i> Histori Pesanan</a>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
						<div class="col-12 col-sm-12 col-md-3">
							<ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
							<li class="nav-item">
								<a class="nav-link" id="subs-tab4" href="{{route('index.subscription.cart')}}">Paket Langganan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" id="meet-tab4" href="{{route('index.meet.cart')}}">Konsultasi Langsung</a>
							</li>
							</ul>
						</div>
						<div class="col-12 col-sm-12 col-md-9 bg-light">
							<div class="tab-content no-padding" id="myTab2Content">
							<div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
								<div class="row">
									<div class="col-12 col-md-12">
										@foreach ($orders as $order)
										<div class="card shadow my-3">
											<div class="card-header">
												<div>
													<h4 class="text-dark d-block">Konsultasi Langsung<br>
														<small><b>id : </b>{{ $order->order_id }}</small>
													</h4>	
												</div>
												<div class="card-header-action">
													<div class="dropdown">
														<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Options</a>
														<div class="dropdown-menu">
															{{-- <a href="{{ route('pay.meet-consultation', ['meetConsultationOrder' => $meetConsultationOrder->no_order]) }}" class="dropdown-item has-icon text-success"><i class="fas fa-credit-card"></i> <b>Bayar</b></a> --}}
															{{-- <a href="{{ route('invoice.activity', ['meetConsultationOrder' => $meetConsultationOrder->no_order]) }}" class="dropdown-item has-icon text-info" target="_blank"><i class="fas fa-file-invoice"></i> <b>Invoice</b></a> --}}
															<div class="dropdown-divider"></div>
															<form class="d-flex" action="{{route('delete.meet.order', ['meetConsultationOrder' => $order->order_id])}}" method="POST">
																@csrf
																@method('delete')
																<button type="submit" class="dropdown-item has-icon text-danger"><small><b>Cancel Order</b></small></button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">
                                                <div class="row">
													<div class="col-4 col-md-4 col-sm-4">
														<p class="mb-0"><b>Konsultan</b></p>
													</div>
													<div class="col-8 col-md-8 col-sm-8">
														<p class="mb-0">: {{$order->consultant->name}}</p>
													</div>
												</div>
                                                <div class="row">
													<div class="col-4 col-md-4 col-sm-4">
														<p class="mb-0"><b>Tanggal Konsultasi</b></p>
													</div>
													<div class="col-8 col-md-8 col-sm-8">
														<p class="mb-0">: {{$order->date}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-4 col-md-4 col-sm-4">
														<p class="mb-0"><b>Harga</b></p>
													</div>
													<div class="col-8 col-md-8 col-sm-8">
														<p class="mb-0">: Rp {{$order->consultant->infoConsultant->price}}</p>
													</div>
												</div>
												<div class="row">
													<div class="col-4 col-md-4 col-sm-4">
														<p class="mb-0"><b>Status</b></p>
													</div>
													<div class="col-8 col-md-8 col-sm-8">
														<p>: 
															@if ($order->status == 'Menunggu Pembayaran')
															<span class="badge badge-warning">Menunggu Pembayaran</span>
															@elseif ($order->status == 'Menunggu Konfirmasi')
															<span class="badge badge-info">Menunggu Konfirmasi</span>
															@elseif ($order->status == 'Ditolak')
															<span class="badge badge-danger">Ditolak</span>
															@elseif ($order->status == 'Diterima')
															<span class="badge badge-success">Diterima</span>
															@endif
														</p>
													</div>
												</div>
												<small class="text-danger">*Lakukan pembayaran sebelum : {{$order->due_date}}</small>
											</div>
											<div class="card-footer">
												@if ($order->status == 'Menunggu Pembayaran')
												<small>Upload Bukti Pembayaran</label>
												<form action="{{route('proof.meet.order', ['meetConsultationOrder' => $order->order_id])}}" method="POST" enctype="multipart/form-data">
													@csrf
													@method('put')
													<input type="file" name="payment_proof" class="btn btn-sm btn-outline-primary d-inline" required>
													<button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i></button>
												</form>	
												@elseif ($order->status == 'Menunggu Konfirmasi')
												<button 
                                                    id="stream"
                                                    class="btn btn-sm btn-outline-info" 
                                                    data-toggle="modal" 
                                                    data-target="#seePayProof"
                                                    data-path="{{ asset('storage/' . $order->payment_proof) }}">Cek Bukti Pembayaran</button>
												<br>
												<small class="text-info">*Silahkan tunggu konfirmasi pembayaran dalam 1x24 jam</small>
												@endif
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

<div class="modal fade" tabindex="-1" role="dialog" id="howToPay">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Tata Cara Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<div class="modal-body">
				<ol>
					<li>Lakukan pembayaran dengan metode pembayaran yang tersedia</li>
					<li>Upload bukti pembayaran</li>
					<li>Tunggu hingga pembayaran dikonfirmasi</li>
					<li>Transaksi selesai!</li>
				</ol>
				<hr>
				<div class="row my-4">
					<div class="col-lg-8">
						<div class="section-title"><b>Payment Method</b></div>
						<small class="section-lead">Pembayaran dapat dilakukan dengan transfer manual ke beberapa rekening kami :</small>
						<div class="d-flex">
							<div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
							<div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
							<div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
							<div class="bg-paypal" data-width="61" data-height="38"></div>
						</div>
					</div>
				</div>
				<small class="text-danger">*Jika pembayaran ditolak silahkan konfirmasi ke pihak kami</small>
			</div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="seePayProof">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">    
                <img id="streamFile" src="" style="width: 100%;object-fit: cover;object-position: center">
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
$(document).ready(function(){
        $(document).on('click', '#stream', function(){
            var path = $(this).data('path');

            $('#streamFile').attr('src', path);
        })
    });
</script>
@endpush