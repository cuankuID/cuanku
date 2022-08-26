<div>
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
    
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <a class="btn btn-primary" href="{{ route('master.create.office-consultant') }}"><i class="fas fa-plus"></i> Tambah Data</a>
                        </div>
                        <div class="card-header-action">
                            <div class="input-group">
                                <input wire:model.defer="search" type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button wire:click="updateSearch" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Nama Kantor</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    {{-- <th>Phone</th> --}}
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offices as $office)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $office->name }}</td>
                                        <td>{{ $office->full_address }}, {{ $office->city->name }}, {{ $office->province->name }},</td>
                                        <td>{{ $office->email }}</td>
                                        {{-- <td>{{ $office->phone }}</td> --}}
                                        <td>
                                            {{-- <a href="" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a> --}}
                                            <a href="{{ route('master.edit.office-consultant', ['consultantOffice' => $office->slug]) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-sm btn-danger d-inline" wire:click.prevent="deleteConfirmation({{ $office->id }})"><i class="fas fa-times-circle"></i></button>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                {{ $offices->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
    
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

        window.addEventListener('deleted-confirmation', event => {
            Swal.fire(
                'Deleted!',
                'This data has been deleted.',
                'success'
            )
        })
    </script>
</div>