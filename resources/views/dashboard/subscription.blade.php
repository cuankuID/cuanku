@extends('layouts.app')

@section('title', 'Cuanku | Langganan')

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Paket Langganan'])

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($subscriptions as $subscription)
                            <div class="col-12 col-md-4">
                                <div class="card shadow-sm" style="border: solid 1px #25479E">
                                    <div class="card-body">
                                        <button
                                            id="show"
                                            class="btn btn-sm rounded-pill start-100 text-primary" 
                                            data-toggle="modal"
                                            data-target="#showModal"
                                            data-name="{{ $subscription->name }}"
                                            data-price="{{ $subscription->price }}"
                                            data-feature="{{ $subscription->feature }}"
                                        ><i class="fas fa-question"></i></button>
                                        <h5 class="text-center text-primary mb-3">{{ $subscription->name }}</h5>
                                        <h5 class="text-center mb-4">Rp {{ $subscription->price }}</h5>
                                        <a href="" class="btn btn-lg btn-block btn-primary">Pilih Paket</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="showModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="detail-name" class="modal-title text-primary">Detail Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-primary">Harga</h6>
                <p id="detail-price"></p>
                <h6 class="text-primary">Fitur</h6>
                <p id="detail-feature"></p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    // trix hidden attach file
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        });

    // Show Modal
    $(document).ready(function(){
        $(document).on('click', '#show', function(){
            var name = $(this).data('name');
            var price = $(this).data('price');
            var feature = $(this).data('feature');

            $('#detail-name').text(name);
            $('#detail-price').text(price);
            $('#detail-feature').html(feature);
        })
    });
</script>
@endpush