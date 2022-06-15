@extends('layouts.auth')

@section('title', 'Cuanku | Verify Email')

@section('content')
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                        <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card card-primary">
                        <div class="card-header"><h4>Email Verification</h4></div>
                        <div class="card-body">
                            <p class="text-muted">We already send a link to verify your email. Check your email!</p>
                            <form action="/email/verification-notification" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Resend email Verification
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
