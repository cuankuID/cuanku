<?php

namespace App\Http\Livewire\LiveConsultation;

use Livewire\Component;
use App\Models\InfoConsultant;

class ShowLiveConsultation extends Component
{
    public function mount(InfoConsultant $infoConsultant)
    {
        $this->infoConsultant = $infoConsultant;
    }

    public function render()
    {
        return view('livewire.live-consultation.show-live-consultation')->extends('layouts.app');
    }
}
