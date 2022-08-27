@extends('layouts.app')

@section('title', 'Cuanku | Dashboard')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Create Team'])

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/dashboard/teams" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" id="position" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}">
                                    @error('position')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="imgInput">Input Image</label>
                                    <img class="img-fluid mb-3 col-sm-3" id="imgPreview">
                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="imgInput" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-row"> 
                                    <div class="form-group col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
    
                                    <div class="form-group col-md-6">
                                        <label for="facebook" class="form-label">Facebook <span class="text-muted">(link)</span></label>
                                        <input type="text" id="facebook" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}">
                                    </div>
                                    @error('facebook')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror    
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="instagram" class="form-label">Instagram <span class="text-muted">(link)</span></label>
                                        <input type="text" id="instagram" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}">
                                    </div>
                                    @error('instagram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
    
                                    <div class="form-group col-md-6">
                                        <label for="linkedin" class="form-label">Linkedin <span class="text-muted">(link)</span></label>
                                        <input type="text" id="linkedin" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ old('linkedin') }}">
                                    </div>
                                    @error('linkedin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror    
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
    // image preview
    imgInput.onchange = evt => {
        const [file] = imgInput.files
        imgPreview.style.display = 'block';
        if (file) {
            imgPreview.src = URL.createObjectURL(file)
        }
    }
</script>
@endsection