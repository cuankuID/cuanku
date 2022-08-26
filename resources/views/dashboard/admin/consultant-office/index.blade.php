@extends('layouts.app')

@section('title', 'Cuanku | Master Kantor Konsultai')

@section('content')
<div class="main-content">
    <section class="section">

    @include('components.header-app', ['title' => 'Kantor Konsultan'])

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <livewire:master.consultant-office.index />

    </section>
</div>
@endsection

@section('script')
{{-- Sweet Alert Delete Confirmation --}}
<script>
    window.addEventListener('show-delete-confirmation', event => {
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteConfirmed')
        }
        })
    })
</script>
@endsection