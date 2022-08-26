@extends('layouts.app')

@section('title', 'Cuanku | Dashboard Post')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Tambah Info Konsultant'])

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                </div>
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control @error('category') is-invalid @enderror" name="category_id">
                                        @foreach ($categories as $category )
                                            @if ( old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" class="selected">{{ $category->name }}</option>
                                            @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror    
                                </div>

                                <div class="form-group">
                                    <label for="imgInput">Input Image Post</label>
                                    <img class="img-fluid mb-3 col-sm-3" id="imgPreview">
                                    <input type="file" class="form-control-file @error('image_post') is-invalid @enderror" id="imgInput" name="image_post">
                                    @error('image_post')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Body</label>
                                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                    <trix-editor input="body"></trix-editor>  
                                    @error('body')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                    Submit
                                    </button>
                                </div>        
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection