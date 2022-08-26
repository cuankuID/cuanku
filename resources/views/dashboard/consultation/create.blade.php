@extends('layouts.app')

@section('title', 'Cuanku | Dashboard')

@section('style')
<style>
    .trix-button-group.trix-button-group--file-tools {
        display:none;
    }
</style>
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Request Consultation'])

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/dashboard/consultation" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Kategori Konultasi</label>
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
                                    <label>Jadwal Konsultasi</label>
                                    <input name="schedule" type="datetime-local" class="datetime form-control" value="{{ old('schedule') }}">
                                    <small class="form-text text-muted">
                                        Pilih jadwal konsultasi minimal 24 jam dari waktu saat ini!
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label>Masalah</label>
                                    <input id="problem" type="hidden" name="problem" value="{{ old('problem') }}">
                                    <trix-editor input="problem"></trix-editor>  
                                    @error('problem')
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

@section('script')
<script>
    // trix hidden attach file
    document.addEventListener("trix-file-accept", function(event) {
        event.preventDefault();
    });
</script>
@endsection