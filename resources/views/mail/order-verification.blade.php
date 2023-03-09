@component('mail::message')
# Selamat {{$order->user->name}},<br>
Order anda telah kami terima, Terima kasih telah membeli layanan kami. Di bawah ini adalah summary pembelian Anda.<br>  
<br>
##### Order id : _{{$order->order_id}}_<br>

@component('mail::table')
| Item                                  | Harga                              |
| --------------------------------------|:----------------------------------:|
| Paket {{$order->subscription->name}}  | Rp {{$order->subscription->price}} |
@endcomponent
<br>
Terimakasih,<br>
### {{ config('app.name') }}
@endcomponent
