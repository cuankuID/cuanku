<?php

namespace App\Http\Livewire\CreateSchedule;

use Livewire\Component;
use App\Models\LiveConsultationSchedule;

class CreateLiveConsultationSchedule extends Component
{
    public $day;
    public $start_time;
    public $end_time;

    protected $listeners = [
        'deleteConfirmed' => 'deleteMeetSchedule',
        'refreshComponent' => '$refresh'
    ];

    public function render()
    {
        $schedules = LiveConsultationSchedule::where('consultant_id', auth()->id())->get();

        return view('livewire.create-schedule.create-live-consultation-schedule',[
            'schedules' => $schedules
        ])->extends('layouts.app');
    }

    public function save()
    {
        $validatedData = $this->validate([
            'day' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required', 'after:start_time']
        ]);

        $validatedData['consultant_id'] = auth()->id();
        LiveConsultationSchedule::create($validatedData);

        $this->reset('day');
        $this->reset('start_time');
        $this->reset('end_time');

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
        $meetSchedule = LiveConsultationSchedule::where('id', $this->delete_id)->first();

        $meetSchedule->delete();

        $this->dispatchBrowserEvent('deleted-confirmation');
        return $this->emit('refreshComponent');
    }
}
