@extends('layouts.app')

@section('title', 'Cuanku | Dashboard')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Team'])

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
                        <div>
                            <h4>Team Table</h4>
                        </div>
                        <div class="card-header-form">
                            <form action="/dashboard/teams">
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
                        <div class="row m-4">
                                <a href="/dashboard/teams/create" class="btn btn-primary"><i class="fas fa-plus"></i>  Add Team</a>
                        </div>        

                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($teams as $team)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->position }}</td>
                                    <td>{{ $team->email }}</td>
                                    <td>
                                        <a href="/teams/{{ $team->id }}" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
                                        <a href="/dashboard/teams/{{ $team->id }}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger d-inline" data-toggle="modal" data-target="#modalDelete{{ $team->id }}">
                                            <i class="fas fa-times-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    {{-- <div class="card-footer text-right"> --}}
                        {{-- <nav class="d-inline-block"> --}}
                            {{-- <ul class="pagination mb-0"> --}}
                                {{-- {{ $teams->links() }} --}}
                            {{-- </ul> --}}
                        {{-- </nav> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('modal')
@foreach ($teams as $team)
<form action="{{ route('teams.destroy', $team->id) }}" method="POST" enctype="multipart/form-data">
    @method('delete')
    @csrf
    <div class="modal fade" id="modalDelete{{$team->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Item</h6>
                </div>
                <div class="modal-body">
                    <p>Are you sure, you want to delete this?</p>
                </div>
                <div class="modal-footer my-0">
                    <input type=hidden id="id" name=id>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>    
</form>
@endforeach
@endsection