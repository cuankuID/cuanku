<?php

namespace App\Http\Livewire\Master\ConsultantOffice;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ConsultantOffice;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // public $offices;
    public $search;
    public $delete_id;

    // public function mount()
    // {
        // $this->offices = ConsultantOffice::paginate(10);
    // }

    public function render()
    {
        return view('livewire.master.consultant-office.index', [
            'offices' => ConsultantOffice::where('name', 'like', '%'.$this->search.'%')->paginate(10)
        ]);
    }

    public function searchOffice()
    {
        $this->offices = ConsultantOffice::where('name', 'like', '%'.$this->search.'%')->get();
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }
}
