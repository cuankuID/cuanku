<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\MeetConsultationOrder;

class PaymentMeetConsultation extends Component
{
    public $meetConsultationOrder;

    public function mount(MeetConsultationOrder $meetConsultationOrder)
    {
        $this->meetConsultationOrder = $meetConsultationOrder;
    }

    public function render()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->meetConsultationOrder->first()->date)->format('d F Y, H:i');
        $orderDate = Carbon::createFromFormat('Y-m-d H:i:s', $this->meetConsultationOrder->first()->created_at)->format('d F Y, H:i');
        $dueDate = Carbon::createFromFormat('Y-m-d H:i:s', $this->meetConsultationOrder->first()->due_date)->format('d F Y, H:i');

        return view('livewire.activity.payment-meet-consultation', [
            'meetConsultationOrder' => $this->meetConsultationOrder,
            'date' => $date,
            'orderDate' => $orderDate,
            'dueDate' => $dueDate,
        ])->extends('layouts.app');
    }
}
