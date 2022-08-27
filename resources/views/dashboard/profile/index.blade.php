@extends('layouts.app')

@section('title', 'Cuanku | Profile')

@section('content')

<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Profile'])
        
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="section-body">
        <h2 class="section-title">Hi, {{ auth()->user()->name }}!</h2>

        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                </div>
                <div class="profile-widget-description">
                <div class="profile-widget-name">{{ auth()->user()->name }}</div>
                <p><b> Username :</b> {{ auth()->user()->username }}</p>
                <p><b> Email :</b> {{ auth()->user()->email }}</p>
                </div>

                <div class="card-footer text-center">
                    <a href="/dashboard/profile/reset-password/{{ auth()->user()->username }}" class="btn btn-primary">Change Password</a>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
                <form action="/dashboard/profile/{{ auth()->user()->username }}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ auth()->user()->name }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ auth()->user()->username }}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ auth()->user()->email }}" autofocus required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>
</div>

@endsection

