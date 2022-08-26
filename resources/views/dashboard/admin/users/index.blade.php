@extends('layouts.app')

@section('title', 'Cuanku | Dashboard Post')

@section('content')

<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'User'])

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
                            <h4>Users Table</h4>
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
                        <div class="row m-4">
                                <a href="/dashboard/users/create" class="btn btn-primary"><i class="fas fa-plus"></i>  Add User</a>
                        </div>        

                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->role_id == 1)
                                        <button class="badge badge-pill badge-info border-0" data-toggle="modal" data-target="#modalRole{{ $user->id }}">{{ $user->role->name }}</button>
                                        @elseif ($user->role_id == 2)
                                        <button class="badge badge-pill badge-primary border-0" data-toggle="modal" data-target="#modalRole{{ $user->id }}">{{ $user->role->name }}</button>
                                        @else
                                        <button class="badge badge-pill badge-success border-0" data-toggle="modal" data-target="#modalRole{{ $user->id }}">{{ $user->role->name }}</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user->status == 1)
                                        <form action="/dashboard/users/{{ $user->username }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="status" value="{{ $user->status }}">
                                            <button type="submit" class="btn btn-sm btn-success d-inline">
                                                <i class="fas fa-check"></i> Active
                                            </button>
                                        </form>

                                        @else
                                        <form action="/dashboard/users/{{ $user->username }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="status" value="{{ $user->status }}">
                                            <button type="submit" class="btn btn-sm btn-danger d-inline">
                                                <i class="fas fa-times"></i> Not Active
                                            </button>
                                        </form> 
                                        @endif
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                {{ $users->links() }}
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
@foreach ($users as $user)
<form action="/dashboard/users/{{ $user->username }}/edit-role" method="POST">
    @method('put')
    @csrf
    <div class="modal fade" id="modalRole{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Update Role User</h6>
                </div>
                <div class="modal-body">
                    <label>Role</label>
                    <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                        @foreach ($roles as $role )
                        <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer my-0">
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>    
</form>
@endforeach
@endsection