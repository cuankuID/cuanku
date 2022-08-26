<?php

namespace App\Http\Livewire\MeetConsultant;

use Livewire\Component;
use App\Models\InfoConsultant;

class HomeMeetConsultant extends Component
{
    public function render()
    {
        $consultants = InfoConsultant::paginate(5);

        return view('livewire.meet-consultant.home-meet-consultant', [
            'consultants' => $consultants
        ])->extends('layouts.app');
    }
}
