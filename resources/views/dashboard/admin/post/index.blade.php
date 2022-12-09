@extends('layouts.app')

@section('title', 'Cuanku | Dashboard Post')

@section('content')

<div class="main-content">

    <section class="section">
        @include('components.header-app', ['title' => 'Post'])

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row justify-content-between">
                            <div class="col-3">
                                <a href="/dashboard/posts/create" class="btn btn-primary m-4"><i class="fas fa-plus"></i>  Tambah Post</a>
                            </div>
                            <div class="col-3">
                                <a href="/dashboard/posts/create" class="btn btn-primary m-4"><i class="fas fa-plus"></i>  Tambah Kategori Post</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        <a href="/posts/{{ $post->slug }}" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger d-inline" data-toggle="modal" data-target="#modalDelete{{ $post->id }}">
                                            <i class="fas fa-times-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                {{ $posts->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('modal')
    @foreach ($posts as $post )
    @include('components.modal-delete')
    @endforeach
@endsection