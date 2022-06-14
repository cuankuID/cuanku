@extends('layouts.app')

@section('title', 'Cuanku | Dashboard Post')

@section('content')
    <div class="main-content">
        <section class="section">
            @include('components.header-app', ['title' => 'Active Order'])

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif    

            <div class="row sortable-card">
                @foreach ($orders as $order)
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5 class="text-primary">Info Order {{ $loop->iteration }}</h5>
                        </div>
                        <div class="card-body">
                            <p><b>No. Order : </b>{{ $order->no_order }}</p>
                            <p><b>Nama Pengorder : </b>{{ $order->user->name }}</p>
                            <p><b>Jadwal Konsultasi : </b>{{ $order->schedule }}</p>
                            <p><b>Link Meeting : </b><a href="{{ $order->link }}" target="_blank">{{ $order->link }}</a></p>
                            <p><b>Kategori : </b>{{ $order->categoryConsultation->name }} (Rp. {{ $order->categoryConsultation->price }})</p>
                            <p><b>Status : </b> <span class="badge badge-pill badge-primary border-0">{{ $order->statusConsultation->name }}</span></p>
                        </div>
                        <div class="card-footer">
                            @if ($order->schedule < \Carbon\Carbon::parse($order->schedule)->addDays())
                            <button class="btn disabled btn-danger">Delete Order</button>
                            @else
                            <form class="d-inline" action="/dashboard/active-order/{{ $order->no_order }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-success" type="submit">Finish Order</button>
                            </form>
                            @endif

                            @if ($order->schedule < \Carbon\Carbon::now())
                            <form class="d-inline" action="/dashboard/active-order/{{ $order->no_order }}" method="POST">
                                @method('put')
                                @csrf
                                <button class="btn btn-success" type="submit">Finish Order</button>
                            </form>
                            @else
                            <button class="btn disabled btn-success">Finish Order</button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection