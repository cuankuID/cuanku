<?php

namespace App\Http\Livewire\LiveConsultation;

use Livewire\Component;
use App\Models\InfoConsultant;
use App\Models\ConsultantSpecialist;
use Carbon\Carbon;

class IndexLiveConsultation extends Component
{
    public $search;
    public $currentTime;
    public $perPage = 10;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function updateSearch()
    {
        $search = $this->search;
    }
    
    public function render()
    {
        $this->currentTime = Carbon::now();

        $consultants = InfoConsultant::where('specialist', 'like', '%' . $this->search . '%')
                                    ->orWhere('work_experience', 'like', '%' . $this->search . '%')
                                    ->orWhereHas('user', function($query) {
                                        return $query->where('name', 'like', '%' . $this->search . '%');
                                    })->paginate($this->perPage);
                                    
        $specialists = ConsultantSpecialist::all();

        return view('livewire.live-consultation.index-live-consultation', [
            'consultants' => $consultants,
            'specialists' => $specialists,
        ])->extends('layouts.app');
    }

    public function loadMore()
    {
        $this->perPage = $this->perPage + 5;
    }
}
