@extends('layouts.auth')

@section('title', 'Cuanku | Login')

@section('content')
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                <img src="{{ asset('assets-app/img/cuanku-text-logo.jpg') }}" alt="logo" width="200" class="shadow-light rounded-circle p-1">
                </div>


                @if(session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="card card-primary">
                <div class="card-header"><h4>Login</h4></div>
                <div class="card-body">
                    <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autofocus>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        <div class="float-right">
                            <a href="{{ route('password.request') }}" class="text-small">
                            Forgot Password?
                            </a>
                        </div>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required tabindex="2">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>    
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                        </button>
                    </div>
                    </form>
                    <div class="text-center mt-4 mb-3">
                    <div class="text-job text-muted">Login With Social</div>
                    </div>
                    <div class="row sm-gutters">
                    <div class="col-6">
                        <a class="btn btn-block btn-social btn-facebook">
                        <span class="fab fa-facebook"></span> Facebook
                        </a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-block btn-social btn-twitter">
                        <span class="fab fa-twitter"></span> Twitter
                        </a>
                    </div>
                    </div>

                </div>
                </div>
                <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="/register">Create One</a>
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