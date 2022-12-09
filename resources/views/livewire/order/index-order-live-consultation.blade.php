@section('title', 'Cuanku | Order Konsultasi Online')

<div>
    <div class="main-content">
        <section class="section">
    
        @include('components.header-app', ['title' => 'Order Konsultasi Online'])
    
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
                            <label for="">Status Order : </label>
                            <select class="form-control-sm" wire:model="status">
                                <option value="Menunggu">Menunggu</option>
                                <option value="Sedang Berlangsung">Sedang Berlangsung</option>
                                <option value="Selesai">Selesai</option>
                            </select>    
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
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>No.Order</th>
                                    <th>Status</th>
                                    <th>Link Chat</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->no_order }}</td>
                                        <td>
                                            @if ($order->status == 'Menunggu')
                                            <p class="badge badge-warning">{{ $order->status }}</p>
                                            @elseif ($order->status == 'Sedang Berlangsung')
                                            <p class="badge badge-info"></i>{{ $order->status }}</p>
                                            @else
                                            <p class="badge badge-danger"></i>{{ $order->status }}</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($order->status == 'Menunggu')
                                            <button class="btn btn-sm btn-primary" wire:click="startOrder({{ $order->user_id }})">Mulai Chat</button>
                                            @elseif ($order->status == 'Sedang Berlangsung')
                                            <a href="/live-chat/{{ $order->user_id }}" class="btn btn-sm btn-info">Masuk Chatroom</a>
                                            @else
                                            <p>-</p>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger" wire:click="endOrder({{ $order->user_id }})">Akhiri Chat</button>
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
                                {{ $orders->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</div>
