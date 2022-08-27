<?php

namespace App\Http\Livewire\CreateSchedule;

use Livewire\Component;
use App\Models\MeetConsultationSchedule;

class CreateMeetConsultationSchedule extends Component
{

    public $day;
    public $time;

    protected $listeners = [
        'deleteConfirmed' => 'deleteMeetSchedule',
        'refreshComponent' => '$refresh'
    ];

    public function render()
    {
        $schedules = MeetConsultationSchedule::where('consultant_id', auth()->id())->get();

        return view('livewire.create-schedule.create-meet-consultation-schedule', [
            'schedules' => $schedules
        ])->extends('layouts.app');
    }

    public function save()
    {
        $validatedData = $this->validate([
            'day' => ['required'],
            'time' => ['required']
        ]);

        $validatedData['consultant_id'] = auth()->id();
        MeetConsultationSchedule::create($validatedData);

        $this->reset('day');
        $this->reset('time');

        session()->flash('success', 'Data berhasil ditambahkan!');
        return $this->emit('refreshComponent');
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteMeetSchedule()
    {
        $meetSchedule = MeetConsultationSchedule::where('id', $this->delete_id)->first();

        $meetSchedule->delete();

        $this->dispatchBrowserEvent('deleted-confirmation');
        return $this->emit('refreshComponent');
    }
}
