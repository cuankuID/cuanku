<?php

namespace App\Http\Livewire\LiveConsultation;

use Livewire\Component;
use App\Models\InfoConsultant;

class ModalInfoConsultant extends Component
{
    protected $listeners = ['open' => 'loadInfo'];

    public $infoConsultant;
    public $consultants;

    public function mount(InfoConsultant $infoConsultant)
    {
        $this->infoConsultant = $infoConsultant;
    }

    public function loadInfo($id)
    {   
        $this->consultants = InfoConsultant::where('consultant_id', $id)->get();

        $this->emit('toggleInfoConsultantModal');
    }

    public function render()
    {
        return view('livewire.live-consultation.modal-info-consultant');
    }
}