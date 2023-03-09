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
                                        <h4 class="ml-4 text-primary mb-3">{{ $subscription->name }}</h4>
                                        <h5 class="ml-4 mb-4">Rp {{ $subscription->price }}</h5>
                                        <h6 class="ml-4 text-muted">Fitur</h6>
                                        <p class="text-muted">{!! $subscription->feature !!}</p>
                                        <button
                                            id="show"
                                            class="btn btn-block btn-primary" 
                                            data-toggle="modal"
                                            data-target="#showModal"
                                            data-name="{{ $subscription->name }}"
                                            data-price="{{ $subscription->price }}"
                                            data-feature="{{ $subscription->feature }}"
                                            data-id="{{ $subscription->id }}"
                                        >Pilih Paket</button>
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
                <h5 id="detail-name" class="modal-title text-primary"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('dashboard.buy.subscription')}}", method="POST">
                @csrf
                <input type="hidden" id="subscription_id" name="subscription_id" value="">
                <div class="modal-body">
                    <h6 class="text-primary">Harga</h6>
                    <p id="detail-price"></p>
                    <h6 class="text-primary">Fitur</h6>
                    <p id="detail-feature"></p>
                    
                    <div class="row mt-4">
                        <div class="col-lg-8">
                            <div class="section-title"><b>Payment Method</b></div>
                            <small class="section-lead">Pembayaran dapat dilakukan dengan transfer manual ke beberapa rekening kami :</small>
                            <div class="d-flex">
                                <div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
                                <div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
                                <div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
                                <div class="bg-paypal" data-width="61" data-height="38"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Beli Paket</button>
                </div>
            </form>
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
            var id = $(this).data('id');

            $('#detail-name').text("Paket " + name);
            $('#detail-price').text("Rp " + price);
            $('#detail-feature').html(feature);
            $('#subscription_id').val(id);
        })
    });
</script>
@endpush