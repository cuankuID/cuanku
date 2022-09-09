<?php

namespace App\Http\Livewire\LiveConsultation;

use Livewire\Component;
use App\Models\InfoConsultant;
use App\Models\User;

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

    public function updateAccess()
    {
        User::where('id', auth()->user()->id)
        ->update(['access_chat_id' => $this->infoConsultant->user->id]);

        return redirect()->to('live-chat/' . $this->infoConsultant->user->id);
        // return redirect('live-chat/');
    }
}
