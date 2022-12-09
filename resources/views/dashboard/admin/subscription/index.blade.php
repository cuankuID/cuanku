@extends('layouts.app')

@section('title', 'Cuanku | Dashboard Subcription Plan')

@section('content')

@section('style')
<style>
    .trix-button-group.trix-button-group--file-tools {
        display:none;
    }
</style>
@endsection

<div class="main-content">

    <section class="section">
        @include('components.header-app', ['title' => 'Subscription Plan'])

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
                        <div class="row m-4">
                            <button id="tambah" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-edit"><i class="fas fa-plus"></i> Tambah Subscription Plan</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Paket</th>
                                    <th>Harga</th>
                                    <th>Fitur</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $subscription->name }}</td>
                                    <td>{{ $subscription->price }}</td>
                                    <td>{!! $subscription->feature !!}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></button>
                                        <button
                                            id="edit"
                                            class="btn btn-sm btn-warning"
                                            data-toggle="modal"
                                            data-target="#modal-tambah-edit"
                                            data-id = "{{ $subscription->id }}"
                                            data-name = "{{ $subscription->name }}"
                                            data-price = "{{ $subscription->price }}"
                                            data-feature = "{{ $subscription->feature }}"
                                            ><i class="fas fa-edit"></i></button>

                                        <button
                                            id="delete"
                                            class="btn btn-sm btn-danger d-inline" 
                                            data-toggle="modal" 
                                            data-target="#modal-delete"
                                            data-id="{{ $subscription->id }}"
                                            >
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
                                {{ $subscriptions->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- MODAL --}}
<div class="modal fade" tabindex="-1" role="dialog" id="modal-tambah-edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="titleModal" class="modal-title text-primary">Tambah Paket Langganan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addEditForm" action="" method="POST">
                <input id="method" type="hidden" name="_method" value="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Paket</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama Paket" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Masukkan Harga Paket" name="price" value="{{old('price')}}">
                        @error('price')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="feature">Body</label>
                        <textarea name="feature" id="feature" cols="30" rows="10">{{ old('feature') }}</textarea>
                        @error('feature')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                {{-- BUTTON --}}
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- MODAL DELETE --}}
<div class="modal fade" tabindex="-1" role="dialog" id="modal-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="deleteForm" action="" method="POST">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <p class="text-center">Apakah anda yakin ingin menghapus data ini?</p>
                </div>

                {{-- BUTTON --}}
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- MODAL EDIT END --}}
@endsection

@push('script')
<script src="//cdn.ckeditor.com/4.20.0/basic/ckeditor.js"></script>

@if ($errors->any())
    <script type="text/javascript">
        $('#modal-tambah-edit').modal('show');
    </script>
@endif

<script>
    CKEDITOR.replace( 'feature' );
</script>

{{-- MODAL TAMBAH --}}
<script>
    $(document).ready(function(){
        $(document).on('click', '#tambah', function(){
            $('#titleModal').text('Tambah Paket Langganan')

            // Tambahkan ID di action
            $('#addEditForm').attr('action', '/dashboard/subscription');
        })
    });
</script>

{{-- MODAL EDIT --}}
<script>
    $(document).ready(function(){
        $(document).on('click', '#edit', function(){

            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            var feature = $(this).data('feature');

            $('#titleModal').text('Edit Paket Langganan')
            $('#method').val('put')
            $('#name').val(name);
            $('#price').val(price);
            CKEDITOR.instances.feature.setData(feature);
    
            // Tambahkan ID di action
            $('#addEditForm').attr('action', '/dashboard/subscription/'+id);
        })
    });

    $("#modal-tambah-edit").on("hidden.bs.modal", function(){
        $(':input', this).val('');
        CKEDITOR.instances.feature.setData();
    });
</script>

{{-- MODAL SHOW --}}
<script>
    $(document).ready(function(){
        $(document).on('click', '#detail', function(){
            var name = $(this).data('name');
            var price = $(this).data('price');
            var feature = $(this).data('feature');
    
            $('#detail-name').text(name);
            $('#detail-price').text(price);
            $('#detail-feature').text(feature);
        })
    });
</script>

{{-- MODAL DELETE --}}
<script>
    $(document).ready(function(){
        $(document).on('click', '#delete', function(){
            var id = $(this).data('id');
    
            // Tambahkan ID di action
            $('#deleteForm').attr('action', '/dashboard/subscription/'+id);
        })
    });
</script>
@endpush