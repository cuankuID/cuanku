@extends('layouts.app')

@section('title', 'Cuanku | Dashboard')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Edit Request Consultation'])

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/dashboard/consultation/{{ $consultation->no_order }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label>Kategori Konultasi</label>
                                    <select class="form-control @error('category') is-invalid @enderror" name="category_id">
                                        @foreach ($categories as $category )
                                        <option value="{{ $category->id }}" {{ $category->id == $consultation->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror    
                                </div>

                                <div class="form-group">
                                    <label>Schedule Consultation</label>
                                    <input name="schedule" type="datetime-local" class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule', \Carbon\Carbon::parse($consultation->schedule)->toDateTimeLocalString()) }}">   
                                    @error('schedule')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Problem</label>
                                    <input id="problem" type="hidden" name="problem" value="{{ old('problem', $consultation->problem) }}">
                                    <trix-editor input="problem"></trix-editor>  
                                    @error('problem')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
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