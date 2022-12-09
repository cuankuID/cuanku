<?php

namespace App\Http\Livewire\Master\Consultant;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\InfoConsultant;

class IndexConsultant extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'deleteConfirmed' => 'deleteInfoConsultant',
        'refreshComponent' => '$refresh'
    ];

    public $delete_id;
    public $search;

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
    
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteInfoConsultant()
    {
        $infoConsultant = InfoConsultant::where('consultant_id', $this->delete_id)->first();
        
        $infoConsultant->delete();

        $this->dispatchBrowserEvent('deleted-confirmation');
        return $this->emit('refreshComponent');
    }
}
