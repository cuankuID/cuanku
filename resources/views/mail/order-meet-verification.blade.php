@component('mail::message')
# Selamat {{$order->customer->name}},<br>
Order anda telah kami terima, Terima kasih telah membeli layanan kami. Di bawah ini adalah summary pembelian Anda.<br>  
<br>
##### Order id : _{{$order->order_id}}_<br>


@component('mail::table')
| Item                                                  | Harga                              |
| ------------------------------------------------------|:----------------------------------:|
| __Janji Temu Konsultan__<br>                          | Rp {{$order->price}}               |
| Konsultan : {{$order->consultant->name}}<br>          |                                    | 
| Tanggal Konsultasi : {{$order->date}}                 |                                    |
@endcomponent
<br>
Terimakasih,<br>
### {{ config('app.name') }}
@endcomponent
