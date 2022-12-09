<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use App\Models\MeetConsultationOrder;
use App\Models\OrderLiveConsultation;

class IndexActivity extends Component
{
    public $meetConsultationOrders;
    public $delete_id;

    protected $listeners = [
        'deleteConfirmed' => 'deleteMeetOrder',
        'refreshComponent' => '$refresh'
    ];

    public function mount()
    {
        $this->meetConsultationOrders = MeetConsultationOrder::where('customer_id', auth()->id())->get();
        // $this->liveConsultationOrders = LiveConsultationOrder::where('customer_id', auth()->id())->get();
    }

    public function render()
    {        
        return view('livewire.activity.index-activity')->extends('layouts.app');
    }

    public function invoice($id)
    {
        $order = MeetConsultationOrder::without(['customer', 'consultant'])->where('no_order', $id)->get();
        // $customer = MeetConsultationOrder::without(['customer', 'consultant'])->join('users', 'meet_consultation_orders.customer_id', '=', 'users.id')->first()->name;
        $customer = MeetConsultationOrder::withOnly('customer')->where('no_order', $id)->first()->customer->name;
        $consultant = MeetConsultationOrder::withOnly('consultant')->where('no_order', $id)->first()->consultant->name;
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $order->first()->date)->format('d F Y, H:i');
        $orderDate = Carbon::createFromFormat('Y-m-d H:i:s', $order->first()->created_at)->format('d F Y, H:i');
        $dueDate = Carbon::createFromFormat('Y-m-d H:i:s', $order->first()->due_date)->format('d F Y, H:i');

        // dd($customer);

        $pdf = Pdf::loadView('pdf.invoice-meet-consultation', [
            'order' => $order,
            'customer' => $customer,
            'consultant' => $consultant,
            'date' => $date,
            'orderDate' => $orderDate,
            'dueDate' => $dueDate
            ]);
        return $pdf->stream("invoice-" . $id . ".pdf", array("Attachment" => false));
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteMeetOrder()
    {
        $meetOrder = MeetConsultationOrder::where('id', $this->delete_id)->first();
        
        $meetOrder->delete();

        $this->dispatchBrowserEvent('deleted-confirmation');
        return $this->emit('refreshComponent');
    }
}
