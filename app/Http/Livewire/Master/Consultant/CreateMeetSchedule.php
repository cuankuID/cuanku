<?php

namespace App\Http\Livewire\Master\Consultant;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\InfoConsultant;
use App\Models\MeetConsultationSchedule;
use App\Models\LiveConsultationSchedule;

class CreateMeetSchedule extends Component
{
    public $infoConsultant;

    public $day;
    public $time;
    public $start_time;
    public $end_time;
    public $meetConsultationSchedules;
    public $LiveConsultationSchedules;

    protected $listeners = [
        'deleteMeetConfirmed' => 'deleteMeetSchedule',
        'deleteLiveConfirmed' => 'deleteLiveSchedule',
        'refreshComponent' => '$refresh'
    ];
    public $delete_id;

    public function mount(InfoConsultant $infoConsultant)
    {
        $this->infoConsultant = $infoConsultant;
    }

    public function render()
    {
        $this->meetSchedules = $this->infoConsultant->meetConsultationSchedule;
        $this->liveSchedules = $this->infoConsultant->liveConsultationSchedule;

        return view('livewire.master.consultant.create-meet-schedule')->extends('layouts.app');
    }

    public function saveMeetConsultation()
    {
        $validatedData = $this->validate([
            'day' => ['required'],
            'time' => ['required']
        ]);

        $validatedData['consultant_id'] = $this->infoConsultant->consultant_id;
        MeetConsultationSchedule::create($validatedData);
        
        $this->reset('day');
        $this->reset('time');
        

        session()->flash('success', 'Data berhasil ditambahkan!');
        return $this->emit('refreshComponent');
    }
    
    public function saveLiveConsultation()
    {
        $validatedData = $this->validate([
            'day' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required']
        ]);

        $validatedData['consultant_id'] = $this->infoConsultant->consultant_id;
        LiveConsultationSchedule::create($validatedData);
        
        $this->reset('day');
        $this->reset('start_time');
        $this->reset('end_time');

        session()->flash('success', 'Data berhasil ditambahkan!');
        return $this->emit('refreshComponent');
    }

    public function deleteLiveConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-live-confirmation');
    }

    public function deleteLiveSchedule()
    {
        $liveSchedule = LiveConsultationSchedule::where('id', $this->delete_id)->first();

        $liveSchedule->delete();

        $this->dispatchBrowserEvent('deleted-live-confirmation');
        return $this->emit('refreshComponent');
    }

    public function deleteMeetConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-meet-confirmation');
    }

    public function deleteMeetSchedule()
    {
        $meetSchedule = MeetConsultationSchedule::where('id', $this->delete_id)->first();

        $meetSchedule->delete();

        $this->dispatchBrowserEvent('deleted-meet-confirmation');
        return $this->emit('refreshComponent');
    }
}
