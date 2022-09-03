<?php

namespace App\Http\Livewire\MeetConsultant;

use Livewire\Component;
use App\Models\MeetConsultation;

class InvoiceMeetConsultant extends Component
{
    public function render()
    {
        return view('livewire.meet-consultant.invoice-meet-consultant')->extends('layouts.app');
    }
}
