@extends('layouts.main')
@section('title', 'Cuanku | Artikel')
@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{ asset('assets/img/photos/bg3.jpg') }}">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-1 text-white">Berita</h1>
                <div class="row justify-content-center">
                    <div class="col mb-7">
                        <nav class="d-inline-block mb-7" aria-label="breadcrumb">
                            <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Berita</li>
                            </ol>
                        </nav>
                        
                        <form action="/posts" method="get">
                            @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari..." name="search" value="{{ request('search') }}">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{ asset('assets/img/bg-team.png') }}" alt="" /></figure> --}}
</section>

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-4">
                <form action="/posts" method="GET">
                    <label for="searchByCategory" class="form-label">Cari berdasar Kategori</label>
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
        {{-- <div class="row g-5">
            @if(count($posts) != 0)
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
        </div> --}}

        <div class="blog grid grid-view">
            <div class="row isotope gx-md-8 gy-8 mb-8">
                @foreach ($posts as $post)
                <article class="item post col-md-4">
                    <div class="card">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/posts/{{ $post->slug }}"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Baca Selengkapnya</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body">
                            <div class="post-header">
                                <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">{{ $post->category->name }}</a>
                                </div>
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                            </div>
                            <div class="post-content" style="height: 90px; overflow: hidden;">
                                <p>{{ $post->excerpt }}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul class="post-meta d-flex mb-0">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->created_at->diffForHumans() }}</span></li>
                                {{-- <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li> --}}
                                <li class="post-likes ms-auto"><a href="#"><i class="uil uil-user"></i>{{ $post->user->name }}</a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mt-4">
        {{ $posts->links() }}
    </div>

@endsection