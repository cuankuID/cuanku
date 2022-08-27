<?php

namespace App\Http\Livewire\MeetConsultant;

use Livewire\Component;
use App\Models\User;
use App\Models\Province;
use App\Models\InfoConsultant;

class IndexMeetConsultant extends Component
{
    public $search;
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
        $consultants = InfoConsultant::where('specialist', 'like', '%' . $this->search . '%')
                                    ->orWhere('price', 'like', '%' . $this->search . '%')
                                    ->orWhere('province', 'like', '%' . $this->search . '%')
                                    ->orWhere('city', 'like', '%' . $this->search . '%')
                                    ->orWhereHas('user', function($query) {
                                        return $query->where('name', 'like', '%' . $this->search . '%');
                                    })
                                    ->orWhereHas('consultantOffice', function($query) {
                                        return $query->where('name', 'like', '%' . $this->search . '%');
                                    })->paginate($this->perPage);

        $provinces = Province::all();

        return view('livewire.meet-consultant.index-meet-consultant', [
            'consultants' => $consultants,
            'provinces' => $provinces
        ])->extends('layouts.app');
    }

    public function loadMore()
    {
        $this->perPage = $this->perPage + 5;
    }
}
