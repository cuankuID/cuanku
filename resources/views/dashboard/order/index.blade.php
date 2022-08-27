@extends('layouts.app')

@section('title', 'Cuanku | Dashboard Post')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Order'])

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($myOrders->count() >= 3)
            <div class="alert alert-warning" role="alert">
                Kamu telah mengambil maksimal order. Selesaikan salah satu order dahulu!
            </div>
        @endif

        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Order</h4>
                        <div class="card-header-form">
                            <form action="/dashboard/order">
                                <div class="input-group">    
                                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- @dump($orders) --}}
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pengorder</th>
                                    <th>Kategori</th>
                                    <th>Jadwal</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->categoryConsultation->name }} (Rp. {{ $order->categoryConsultation->price }})</td>
                                    <td>{{ $order->schedule }}</td>
                                    <td>
                                        @if ($myOrders->count() < 3)
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalOrder{{ $order->id }}">Take Order</button>
                                        @else
                                        <span class="text-danger">Order Full</span>
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
@endsection

@section('modal')
@foreach ($orders as $order)
<form action="/dashboard/order/{{ $order->no_order }}" method="POST">
    @method('put')
    @csrf
    <div class="modal fade" id="modalOrder{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Take Order</h6>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Link Consultation</label>
                        <input type="url" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}">
                        @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror   
                    </div>
                </div>
                <div class="modal-footer my-0">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>    
</form>
@endforeach
@endsection
