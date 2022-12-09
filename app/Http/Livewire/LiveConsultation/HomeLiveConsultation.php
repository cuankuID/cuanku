<?php

namespace App\Http\Livewire\LiveConsultation;

use Livewire\Component;
use App\Models\InfoConsultant;

class HomeLiveConsultation extends Component
{
    public function render()
    {
        $consultants = InfoConsultant::paginate(5);

        return view('livewire.live-consultation.home-live-consultation', [
            'consultants' => $consultants
        ])->extends('layouts.app');
    }
}
