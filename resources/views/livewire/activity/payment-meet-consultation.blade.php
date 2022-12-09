

<div>
    <div class="main-content">
        <section class="section">
            @include('components.header-app', ['title' => 'Invoice'])

            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2>Invoice</h2>
                                    <div class="invoice-number">Order #{{ $meetConsultationOrder->no_order }}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                        <strong>Tagihan Kepada:</strong><br>
                                            {{ $meetConsultationOrder->customer->name }}<br>
                                            {{-- 1234 Main<br>
                                            Apt. 4B<br>
                                            Bogor Barat, Indonesia --}}
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                        <strong>Tanggal Order:</strong><br>
                                        {{ $orderDate }} WIB<br><br>
                                        </address>
                                        <address>
                                        <strong>Tanggal Jatuh Tempo:</strong><br>
                                        {{ $dueDate }} WIB<br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">#</th>
                                        <th>Item</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Totals</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h6>Konsultasi Temu Langsung</h6>
                                            <p class="my-1">Konsultan : {{ $meetConsultationOrder->consultant->name }}</p>
                                            <p class="my-1">Lokasi : </p>
                                            <p class="my-1">Waktu : {{ $date }} WIB</p>
                                        </td>
                                        <td class="text-center">Rp {{ $meetConsultationOrder->price }}</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">Rp {{ $meetConsultationOrder->price }}</td>
                                    </tr>
                                </table>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="section-title">Metode Pembayaran</div>
                                        <p class="section-lead">The payment method that we provide is to make it easier for you to pay invoices.</p>
                                        <div class="d-flex">
                                            <div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
                                            <div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
                                            <div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
                                            <div class="bg-paypal" data-width="61" data-height="38"></div>
                                        </div>
                                        <br>
                                        <strong>*Keterangan</strong>
                                        <p>
                                            Harap lakukan pembayaran sebelum tanggal jatuh tempo, Order akan otomatis dibatalkan jika belum
                                            melakukan pembayaran melebihi tanggal jatuh tempo
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Subtotal</div>
                                            <div class="invoice-detail-value">Rp {{ $meetConsultationOrder->price }}</div>
                                        </div>
                                        <div class="invoice-detail-item">
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg">Rp {{ $meetConsultationOrder->price }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        <div class="float-lg-left mb-lg-0 mb-3">
                            <button class="btn btn-success btn-icon icon-left">
                                <svg width="24" height="24" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>WhatsApp</title>
                                    <path fill="#fff" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                Konfirmasi Pembayaran</button>
                            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                        </div>
                        <a href="{{ route('invoice.activity', ['meetConsultationOrder' => $meetConsultationOrder->no_order]) }}" class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
