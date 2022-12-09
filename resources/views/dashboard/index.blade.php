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
                        <div class="col">
                            <a href="{{ route('index.meet-consultant') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-user-tie"></i> Konsultasi Langsung</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('index.live-consultation') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-laptop-medical"></i> Konsultasi Online</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('index.search-office') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-building"></i> Cari Kantor Konsultan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection