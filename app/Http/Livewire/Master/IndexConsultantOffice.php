<?php

namespace App\Http\Livewire\Master;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use App\Models\ConsultantOffice;

class IndexConsultantOffice extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['deleteConfirmed' => 'deleteConsultantOffice'];
    public $search;
    public $delete_id;

    public function mount()
    {
        // $this->offices = ConsultantOffice::paginate(10);
    }

    public function updateSearch()
    {
        $search = $this->search;
    }

    public function render()
    {
        $offices = ConsultantOffice::where('name', 'like', '%'.$this->search.'%')->paginate(10);

        return view('livewire.master.consultant-office.index-consultant-office', [
            'offices' => $offices
        ])->extends('layouts.app');
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteConsultantOffice()
    {
        $consultantOffice = ConsultantOffice::where('id', $this->delete_id)->first();

        if($consultantOffice->image) {
            Storage::delete($consultantOffice->image);
        }

        $consultantOffice->delete();

        $this->dispatchBrowserEvent('deleted-confirmation');
    }
}
