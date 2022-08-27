<?php

namespace App\Http\Livewire\LiveConsultation;

use Livewire\Component;

class HomeLiveConsultation extends Component
{
    public function render()
    {
        return view('livewire.live-consultation.home-live-consultation')->extends('layouts.app');
    }
}
