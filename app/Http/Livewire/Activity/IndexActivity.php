<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\MeetConsultationOrder;

class IndexActivity extends Component
{
    public $meetConsultationOrders;
    // public $delete_id;

    protected $listeners = [
        'deleteConfirmed' => 'deleteMeetSchedule',
        'refreshComponent' => '$refresh'
    ];

    public function mount()
    {
        $this->meetConsultationOrders = MeetConsultationOrder::where('customer_id', auth()->id())->get();
    }

    public function render()
    {        
        return view('livewire.activity.index-activity')->extends('layouts.app');
    }

    public function invoice($id)
    {
        // $data['judul'] = 'Hello World';
        $pdf = Pdf::loadView('pdf.invoice-meet-consultation');
        return $pdf->stream("invoice.pdf", array("Attachment" => false));
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
