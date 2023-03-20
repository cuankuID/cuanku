@extends('layouts.main')
@section('title', $post->title . ' | Cuanku')

@section('content')

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-0 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p><a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image_post)
                <div style="max-height: 500px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image_post) }}" class="card-img-top" alt="...">
                </div>
                @else
                <img src="https://source.unsplash.com/800x500?{{ $post->category->name }}" class="card-img-top" alt="...">
                @endif
                <p>{!! $post->body !!}</p>        
            </div>
        </div>
    </div>
@endsection