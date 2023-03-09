@extends('layouts.app')

@section('title', 'Cuanku | History Order Subscription')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'History Order Temu Konsultan'])
    
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="form-group">
                            <label>Status</label>
                            <form id="filter-status" action="{{route('history.meet.cart')}}" method="GET">
                                @csrf
                                <select name="status" id="" class="form-control">
                                    <option value="">-- Semua Layanan --</option>
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
                                    <th>Konsultan</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Informasi</th>
                                </tr>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->order_id}}</td>
                                    <td>{{$order->consultant->name}}</td>
                                    <td>Rp {{$order->price}}</td>
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
                                        data-information="{{$order->information}}"
                                        ><i class="fas fa-eye"></i> Informasi</button>
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
                <hr>
                <p><i class="fas fa-info-circle"></i> Informasi Lain</p>
                <span id="detail-information" class="text-danger"></span>
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
            var information = $(this).data('information');
            
            $('#streamFile').attr('src', path);
            $('#detail-information').text(information);
        })
    });

    $('#filter-status').on('change', function(e){
        $(this).closest('form').submit();
    });
</script>
@endpush