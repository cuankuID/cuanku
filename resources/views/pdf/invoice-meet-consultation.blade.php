<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <style>
            @font-face {
                font-family: 'Inter';
                src: url({{ storage_path('fonts\Inter-Regular.ttf') }}) format("truetype");
                font-weight: 400; // use the matching font-weight here ( 100, 200, 300, 400, etc).
                font-style: regular; // use the matching font-style here
            }
            body{
                font-family: Inter, sans-serif;
            }

            .flexbox::after{
                clear: both;
                display: table;
            }
            .box-left{
                float: left;
                width: 50%;
            }

            .box-right{
                float: right;
            }
        </style>
    </head>
    <body>
        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="flexbox" style="height: 10%;">
                            <div class="box-left">
                                <img src="https://i.ibb.co/6NtPSYM/cuanku-text-logo.jpg" alt="cuanku-text-logo" style="width:60%;"/>
                            </div>
                            <div class="box-left">
                                <h2 style="padding-left: 35%">Invoice</h2>
                                <p style="padding-left: 35%"><strong>Order ID</strong> : #{{$order->first()->no_order}}</p>
                            </div>
                        </div>

                        <hr style="margin: 20px 0px 20px 0px">

                        <div class="flexbox" style="height: 10%">
                            <div class="box-left">
                                <strong>Tagihan Kepada:</strong><br>
                                    {{ $customer }}<br><br>
                                    <address>
                                        1234 Main<br>
                                        Apt. 4B<br>
                                        Bogor Barat, Indonesia    
                                    </address>
                            </div>
                            <div class="box-left" style="padding-left: 18%">
                                <strong>Tanggal Order:</strong><br>
                                {{ $orderDate }} WIB<br><br>

                                <strong>Tanggal Jatuh Tempo:</strong><br>
                                {{ $dueDate }} WIB<br><br>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="row mt-4" style="width: 100%; margin-top: 50px">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table class="table table-striped table-hover table-md" style="width: 100%; border-collapse: collapse; border: 1px solid #ddd">
                            <tr style="border: 1px solid #ddd">
                            <th data-width="70" style="background-color: #25479E; color: white">#</th>
                            <th style="background-color: #25479E; color: white; padding: 10px 0px 10px 0px;">Item</th>
                            <th style="background-color: #25479E; color: white; padding: 10px 0px 10px 0px;">Harga</th>
                            <th style="background-color: #25479E; color: white; padding: 10px 0px 10px 0px;">Jumlah</th>
                            <th style="background-color: #25479E; color: white; padding: 10px 0px 10px 0px;">Total</th>
                            </tr>
                            <tr>
                            <td style="padding: 10px 0px 10px 0px; border: 1px solid #ddd; vertical-align: middle; padding-left: 10px">1</td>
                            <td style="padding: 10px 0px 10px 0px; border: 1px solid #ddd; vertical-align: middle; padding-left: 10px">
                                Konsultasi Temu Langsung <br><br>
                                <small>
                                    Konsultan : {{ $consultant }}<br>
                                    Lokasi : Kramat Jati, Jakarta Timur <br>
                                    Waktu : {{ $date }} WIB<br>
                                </small>
                            </td>
                            <td style="padding: 10px 0px 10px 0px; border: 1px solid #ddd; vertical-align: middle; padding-left: 10px">Rp {{ $order->first()->price }}</td>
                            <td style="padding: 10px 0px 10px 0px; border: 1px solid #ddd; vertical-align: middle; padding-left: 10px">1</td>
                            <td style="padding: 10px 0px 10px 0px; border: 1px solid #ddd; vertical-align: middle; padding-left: 10px">Rp {{ $order->first()->price }}</td>
                            </tr>
                        </table>
                        </div>
                        <div class="flexbox" style="margin-top: 20px;">
                            <div class="box-right" style="width: 15%">
                                <div class="invoice-detail-item">
                                <div class="invoice-detail-name">Subtotal</div>
                                <div class="invoice-detail-value">Rp {{ $order->first()->price }}</div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-2 mb-2" style="width: 100%; margin-top: 60px">

                        <div class="flexbox" style="height: 5%; background-color: #25479E; padding: 10px 0px 10px">
                            <div class="box-right" style="width: 15%">
                                <div class="invoice-detail-name" style="color: white"><strong>Total</strong></div>
                                <div class="invoice-detail-value invoice-detail-value-lg" style="color: white">Rp {{ $order->first()->price }}</div>
                            </div>    
                        </div>

                        <hr>

                        <div style="margin-top: 50px">
                            <strong>Metode Pembayaran</strong>
                            <p>Silahkan transfer ke rekening :</p>
                            <p>XXXXXXXXXX BCA a/n PT.Cuanku</p>
                        </div>

                        <div style="margin-top: 50px">
                            <address>
                                <strong><small>*Keterangan</small></strong><br>
                                <small>Harap lakukan pembayaran sebelum tanggal jatuh tempo, Order akan otomatis dibatalkan jika belum melakukan pembayaran melebihi tanggal jatuh tempo</small>    
                            </address>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>