@extends('layouts.app')

@section('title', 'Cuanku | Create Kantor Konsultai')

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
        @include('components.header-app', ['title' => 'Edit Kantor Konsultan'])
            <div class="card card-primary">
                <div class="card-body">
                    {{-- @dd($consultantOffice) --}}
                    <form action="{{ route('master.update.office-consultant', ['consultantOffice' => $office->slug]) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>Nama Kantor</label>
                            <input type="text" name="name" value="{{ old('name', $office->name) }}" class="form-control @error('name') is-invalid @enderror" required autofocus>
                            @error('name')
                                <div class="invalid-feeback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="imgInput">Foto Kantor</label>
                            @if ($office->image)
                            <img src="{{ asset('storage/' . $office->image) }}" class="img-fluid mb-3 col-sm-3 d-block" id="imgPreview">
                            @else
                            <img class="img-fluid mb-3 col-sm-3" id="imgPreview">
                            @endif
                            <input type="file" name="image" name="image" id="imgInput" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <label>Informasi Kantor</label>
                            <input id="information" type="hidden" name="information" value="{{ old('information', $office->information) }}">
                            <trix-editor input="information"></trix-editor>  
                            @error('information') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>No.Telepon</label>
                                <input type="text" name="phone" value="{{ old('phone', $office->phone) }}" class="form-control @error('phone') is-invalid @enderror" autofocus>
                                @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('phone', $office->email) }}" class="form-control @error('email') is-invalid @enderror" autofocus>
                                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                    
                            <div class="form-group col-md-4">
                                <label>Website</label>
                                <input type="url" name="website" value="{{ old('website', $office->website) }}" class="form-control" autofocus>
                                @error('website') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                        <livewire:province-city-dropdown />
                    
                        <div class="form-group">
                            <label>Alamat Detail</label>
                            <input type="text" name="full_address" value="{{ old('full_address', $office->full_address) }}" class="form-control" placeholder="Jalan, Kelurahan, Kecamatan">
                        </div>
                    
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Latitude</label>
                                <input type="text" name="lat" value="{{ old('lat', $office->lat) }}" class="form-control @error('lat') is-invalid @enderror" required autofocus>
                                @error('lat')
                                    <div class="invalid-feedbcak">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            <div class="form-group col-md-6">
                                <label>Longitude</label>
                                <input type="text" name="long" value="{{ old('long', $office->long) }}" class="form-control @error('long') is-invalid @enderror" required autofocus>
                                @error('long')
                                <div class="invalid-feedbcak">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
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