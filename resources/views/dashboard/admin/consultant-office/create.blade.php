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
            @include('components.header-app', ['title' => 'Tambah Kantor Konsultan'])
            <div class="card card-primary">
                <livewire:master.consultant-office.create />
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