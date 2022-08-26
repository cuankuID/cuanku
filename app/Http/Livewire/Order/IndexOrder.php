<?php

namespace App\Http\Livewire\Order;

use Livewire\Component;
use App\Models\MeetConsultationOrder;

class IndexOrder extends Component
{
    public function render()
    {
        $orders = MeetConsultationOrder::where('consultant_id', auth()->id());
        
        return view('livewire.order.index-order', [
            'orders' => $orders
        ])->extends('layouts.app');
    }
}
