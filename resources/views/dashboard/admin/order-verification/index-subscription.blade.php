@extends('layouts.app')

@section('title', 'Cuanku | Konfirmasi Order')

@section('content')

<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Konfirmasi Order Subscription'])

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
                <div class="card">
                    <div class="card-header">
                        <div class="form-group">
                            <label>Status</label>
                            <form id="filter-status" action="{{route('index.subs.order.verif')}}" method="GET">
                                @csrf
                                <select name="status" id="" class="form-control">
                                    <option value="">-- Semua Status --</option>
                                    <option value="Menunggu Konfirmasi" @if (request('status') == 'Menunggu Konfirmasi') selected @endif>Menunggu Konfirmasi</option>
                                    <option value="Ditolak" @if (request('status') == 'Ditolak') selected @endif>Ditolak</option>
                                    <option value="Diterima" @if (request('status') == 'Diterima') selected @endif>Diterima</option>
                                </select>    
                            </form>
                        </div>
                        <div class="card-header-form">
                            <form action="/dashboard/users">
                                <div class="input-group">    
                                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>Id Order</th>
                                    <th>Pembeli</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->order_id}}</td>
                                    <td>{{$order->user->username}}</td>
                                    <td>{{$order->subscription->name}} <b>(Rp {{$order->subscription->price}})</b></td>
                                    <td>
                                        @if ($order->status == 'Menunggu Pembayaran')
                                        <span class="badge badge-warning">{{$order->status}}</span>
                                        @elseif ($order->status == 'Menunggu Konfirmasi')
                                        <span class="badge badge-info">{{$order->status}}</span>
                                        @elseif ($order->status == 'Ditolak')
                                        <span class="badge badge-danger">{{$order->status}}</span>
                                        @elseif ($order->status == 'Diterima')
                                        <span class="badge badge-success">{{$order->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->status != 'Menunggu Pembayaran')
                                        <button 
                                        id="stream"
                                        class="btn btn-sm btn-info" 
                                        data-toggle="modal" 
                                        data-target="#seePayProof"
                                        data-path="{{ asset('storage/' . $order->payment_proof) }}"
                                        ><i class="fas fa-eye"></i> Bukti Pembayaran</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->status == 'Menunggu Konfirmasi')
                                        <form action="{{route('acc.subs.order.verif', ['subscriptionOrder' => $order->order_id])}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></button>
                                        </form>
                                        <button 
                                        id="reject"
                                        class="btn btn-sm btn-danger" 
                                        data-toggle="modal" 
                                        data-target="#rejectOrder"
                                        data-id="{{$order->order_id}}"
                                        data-user="{{$order->user->username}}"
                                        data-item="{{$order->subscription->name}}"
                                        data-price="{{$order->subscription->price}}"
                                        ><i class="fas fa-times-circle"></i></button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                {{ $orders->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

<div class="modal fade" tabindex="-1" role="dialog" id="rejectOrder">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Reject Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="reject-form" action="" method="POST">
                <div class="modal-body">
                    <div class="row mb-1">
                        <div class="col-3">Id Order</div>
                        <div class="col-9">
                            : <span id="detail-id"></span>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-3">Pembeli</div>
                        <div class="col-9">
                            : <span id="detail-user"></span>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-3">Item</div>
                        <div class="col-9">
                            : <span id="detail-item"></span>
                        </div>
                    </div>
                    <hr>
                    @csrf
                    @method('put')
                    <label class="d-block"><b>Alasan Order Ditolak</b></label>
                    <input type="text" name="information" id="information" class="form-control">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $('#filter-status').on('change', function(e){
        $(this).closest('form').submit();
    });
    
	$(document).ready(function(){
        $(document).on('click', '#stream', function(){
            var path = $(this).data('path');

            $('#streamFile').attr('src', path);
        })
    });

	$(document).ready(function(){
        $(document).on('click', '#reject', function(){
            var path = $(this).data('path');
            var id = $(this).data('id');
            var user = $(this).data('user');
            var item = $(this).data('item');
            var price = $(this).data('price');
            
            $('#streamFile').attr('src', path);
            $('#detail-id').text(id);
            $('#detail-user').text(user);
            $('#detail-item').text('Rp '+ price + ' (' + item + ')');
            $('#reject-form').attr('action', '/dashboard/admin/order-verification/subs/reject/'+id);
        })
    });
</script>
@endpush