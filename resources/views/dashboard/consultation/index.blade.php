@extends('layouts.app')

@section('title', 'Cuanku | Consultation')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Live Consultation'])

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
                        <h4>Request Konsultasi</h4>
                        <div class="card-header-action">
                            <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="collapse show" id="mycard-collapse">
                        <div class="card-body p-0">
                            <div class="row m-4">
                                    @if ($allConsultations->count() < 3)
                                    <a href="/dashboard/consultation/create" class="btn btn-primary"><i class="fas fa-plus"></i>  Request Consultation</a>
                                    @else
                                    <div class="alert alert-info fade show" role="alert">
                                        Kamu sudah mencapai batas maksimal order konsultasi!
                                    </div>
                                    @endif
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>No.Order</th>
                                        <th>Kategori</th>
                                        <th>Schedule</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($consultations as $consultation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $consultation->no_order }}</td>
                                        <td>{{ $consultation->categoryConsultation->name }}</td>
                                        <td>{{ $consultation->schedule }}</td>
                                        <td>
                                            @if ($consultation->status_id == 1)
                                            <span class="badge badge-pill badge-info border-0">{{ $consultation->statusConsultation->name }}</span>
                                            @else
                                            <span class="badge badge-pill badge-warning border-0">{{ $consultation->statusConsultation->name }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-info d-inline" data-toggle="modal" data-target="#modalInfo{{ $consultation->id }}">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <a href="/dashboard/consultation/{{ $consultation->no_order }}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Order Accepted --}}
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Konsultasi Diterima</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Konsultan</th>
                                    <th>Link Meeting</th>
                                    <th>Schedule</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($accConsultations as $accConsultation)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $accConsultation->consultant->name }}</td>
                                    <td>{{ $accConsultation->link }}</td>
                                    <td>{{ $accConsultation->schedule }}</td>
                                    <td>
                                        @if ($accConsultation->status_id == 3)
                                        <span class="badge badge-pill badge-primary border-0">{{ $accConsultation->statusConsultation->name }}</span>
                                        @else 
                                        <span class="badge badge-pill badge-success border-0">{{ $accConsultation->statusConsultation->name }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-info d-inline" data-toggle="modal" data-target="#modalInfo{{ $accConsultation->id }}">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                        @if ($accConsultation->status_id == 4)
                                        <form class="d-inline" action="/dashboard/consultation/done/{{ $accConsultation->no_order }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-success" type="submit">
                                                <i class="fas fa-check-circle"></i>
                                            </button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>
@endsection

@section('modal')
@foreach ($allConsultations as $allConsultation)
<form action="/dashboard/consultation/{{ $allConsultation->no_order }}" method="POST">
    @method('delete')
    @csrf
    <div class="modal fade" id="modalInfo{{ $allConsultation->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Info Detail Order</h5>
                </div>
                <div class="modal-body">
                    <p><b>No.Order</b> : {{ $allConsultation->no_order }}</p>
                    <p>Jadwal : {{ $allConsultation->schedule }}</p>
                    @if ($allConsultation->consultant_id)
                    <p>Konsultan : {{ $allConsultation->consultant->name }}</p>
                    @endif
                    <p>Kategori : {{ $allConsultation->categoryConsultation->name }} (Rp.{{ $allConsultation->categoryConsultation->price }})</p>
                    <p>Status : {{ $allConsultation->statusConsultation->name }}</p>
                </div>
                <div class="modal-footer my-0">
                    <button type="submit" class="btn btn-sm btn-danger">Cancel Order</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>    
</form>
@endforeach
@endsection