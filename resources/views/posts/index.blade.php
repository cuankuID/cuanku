@extends('layouts.main')
@section('title', 'Cuanku | ' . $title)
@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-0 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="text-center">Posts</h1>
                </div>    
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/posts" method="get">
                        @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-md-4">
                <form action="/posts" method="GET">
                    <label for="searchByCategory" class="form-label">Search by Category</label>
                    <div class="input-group">
                        <select class="form-select" id="searchByCategory" name="category">
                            @foreach ($post_categories as $postcat)
                            <option value="{{ $postcat->category->slug }}">{{ $postcat->category->name }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>    
                </form>
            </div>
        </div>
        <div class="row g-5">
                
            @foreach ($posts as $post)
            <div class="col-md-4 col-sm-3">
                <div class="card">
                    <a href="/posts?category={{ $post->category->slug }}" class="position-absolute btn-sm btn-primary fw-bold">{{ $post->category->name }}</a>
                    @if ($post->image_post)
                    <div style="max-height: 500px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image_post) }}" class="card-img-top" alt="...">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/800x500?{{ $post->category->name }}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">By : {{ $post->user->name }} <p><small>{{ $post->created_at->diffForHumans() }}</small></p></h6>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h2 class="text-center">No Post Found</h2>
            @endif
        </div>
    </div>

    <div class="container mt-4">
        {{ $posts->links() }}
    </div>

@endsection