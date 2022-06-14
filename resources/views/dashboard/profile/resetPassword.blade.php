@extends('layouts.auth')

@section('title', 'Cuanku | Reset Password')

@section('content')
<div id="app">
    <section class="section">
    <div class="container mt-5">
        <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <div class="card card-primary">
            <div class="card-header"><h4>Reset Password</h4></div>
            <div class="card-body">
                <form action="/dashboard/profile/reset-password/{{ auth()->user()->username }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" tabindex="1">
                        @error('current_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" name="password" tabindex="2">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" tabindex="2">
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Reset Password
                        </button>
                    </div>
                </form>
            </div>
            </div>
            <div class="simple-footer">
            Copyright &copy; Stisla 2018
            </div>
        </div>
        </div>
    </div>
    </section>
</div>
@endsection