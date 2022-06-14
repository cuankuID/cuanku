@extends('layouts.app')

@section('title', 'Cuanku | Dashboard')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Welcome to Cuanku!'])

        <div class="col-12 mb-4">
            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="https://source.unsplash.com/3000x1500?finance">
                <div class="hero-inner">
                    <h2>Hello, {{ auth()->user()->name }}!</h2>
                    <p class="lead">Welcome to Cuanku, here we will help to provide advice and solutions for your financial problems</p>
                    <p><b>Let's Get Started!</b></p>
                    <div class="row mt-4 pb-0">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-map-marker-alt"></i> Search Consultant Office</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-comments-dollar"></i> Live Consultation</a>
                        </div>
                    </div>
                    {{-- <div class="mt-4"> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>

    </section>
</div>


@endsection