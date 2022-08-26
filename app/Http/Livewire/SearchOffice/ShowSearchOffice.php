<?php

namespace App\Http\Livewire\SearchOffice;

use Livewire\Component;
use App\Models\ConsultantOffice;
use App\Models\InfoConsultant;

class ShowSearchOffice extends Component
{
    public $consultantOffice;

    public function mount(ConsultantOffice $consultantOffice)
    {
        $this->consultantOffice = $consultantOffice;
    }

    public function render()
    {
        $consultants = InfoConsultant::where('office_id', $this->consultantOffice->id)->get();

        return view('livewire.search-office.show-search-office', [
            'consultants' => $consultants
        ])->extends('layouts.app');
    }
}
