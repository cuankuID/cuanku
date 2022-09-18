<?php

namespace App\Http\Livewire\Order;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\OrderLiveConsultation;

class IndexOrderLiveConsultation extends Component
{
    use WithPagination;

    public $status = 'Menunggu';
    public $search = null;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'refreshComponent' => '$refresh'
    ];

    public function render()
    {
        $orders = OrderLiveConsultation::where('consultant_id', auth()->id())
                                        ->where('status', $this->status)
                                        ->where('no_order', 'like', '%'.$this->search.'%')
                                        ->latest()->paginate(10);

        return view('livewire.order.index-order-live-consultation', [
            'orders' => $orders
        ])->extends('layouts.app');
    }

    public function startOrder($user_id)
    {
        $validatedData;
        $validatedData['status'] = 'Sedang Berlangsung';

        $order = OrderLiveConsultation::where('no_order', 'like', 'LC-' . auth()->id() . $user_id . '%')->first();

        OrderLiveConsultation::where('id',  $order->id)->update($validatedData);

        return redirect()->to('live-chat/' . $user_id);
    }

    public function endOrder($user_id)
    {
        $validatedData;
        $validatedData['status'] = 'Selesai';

        $order = OrderLiveConsultation::where('no_order', 'like', 'LC-' . auth()->id() . $user_id . '%')->first();

        OrderLiveConsultation::where('id',  $order->id)->update($validatedData);

        return $this->emit('refreshComponent');
    }
}
