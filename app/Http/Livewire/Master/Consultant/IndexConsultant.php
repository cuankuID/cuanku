<?php

namespace App\Http\Livewire\Master\Consultant;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\InfoConsultant;

class IndexConsultant extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function updateSearch()
    {
        $search = $this->search;
    }

    public function render()
    {
        $consultant = User::where('role_id', 2)
                            ->where(function($query) {
                                return $query->where('name', 'like', '%'.$this->search.'%')
                                        ->orWhere('username', 'like', '%'.$this->search.'%')
                                        ->orWhere('email', 'like', '%'.$this->search.'%');
                            })->paginate(10);

        return view('livewire.master.consultant.index-consultant', [
            'consultants' => $consultant
        ])->extends('layouts.app');
    }
}
