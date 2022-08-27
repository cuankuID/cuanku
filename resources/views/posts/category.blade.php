@extends('layouts.main')
@section('title', 'Post | Cuanku')

@section('content')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-0 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="text-center">Posts</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                </div>
            </div>
        </div>

    </section>

    <main class="container mt-5">
        <div class="row">
            <ul>
                @foreach ($categories as $category)
                    <li><a href="/posts/{{ $category->slug }}"><h3>{{ $category->name }}</h3></a></li>
            @endforeach        
            </ul>
        </div>
    </main>

@endsection