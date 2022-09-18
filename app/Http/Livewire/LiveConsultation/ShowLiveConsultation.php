<?php

namespace App\Http\Livewire\LiveConsultation;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\InfoConsultant;
use App\Models\User;
use App\Models\OrderLiveConsultation;

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

    public function orderConsultation()
    {
        $validatedData;
        $validatedData['user_id'] = auth()->id();
        $validatedData['consultant_id'] = $this->infoConsultant->consultant_id;
        $validatedData['no_order'] = 'LC-' . $this->infoConsultant->consultant_id . auth()->id() . '-' . Str::random(5);
        $validatedData['status'] = 'Menunggu';

        $order = OrderLiveConsultation::where('no_order', 'like', 'LC-' . $this->infoConsultant->consultant_id . auth()->id() . '%')->exists();

        if($order) {
            return redirect()->to('live-chat/' . $this->infoConsultant->user->id);
        } else {
            OrderLiveConsultation::create($validatedData);
            return redirect()->to('live-chat/' . $this->infoConsultant->user->id);
        };
    }
}
