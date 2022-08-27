<?php

namespace App\Http\Livewire\SearchOffice;

use Livewire\Component;
use App\Models\Province;
use App\Models\ConsultantOffice;

class IndexSearchOffice extends Component
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
        $provinces = Province::all();
        $offices = ConsultantOffice::where('name', 'like', '%'.$this->search.'%')
                    ->orWhereHas('city', function($query) {
                        return $query->where('name', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('province', function($query) {
                        return $query->where('name', 'like', '%' . $this->search . '%');
                    })->paginate($this->perPage);

        return view('livewire.search-office.index-search-office', [
            'provinces' => $provinces,
            'offices' => $offices
        ])->extends('layouts.app');
    }

    public function loadMore()
    {
        $this->perPage = $this->perPage + 5;
    }
}
