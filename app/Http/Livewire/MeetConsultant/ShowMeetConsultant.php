<?php

namespace App\Http\Livewire\MeetConsultant;

use Livewire\Component;
use App\Models\InfoConsultant;
use App\Models\MeetConsultationSchedule;
use App\Models\MeetConsultationOrder;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Str;

class ShowMeetConsultant extends Component
{
    public $infoConsultant;
    // public $listeners = [
    //     'daySelected' => 'showTime',
    // ];
    public $date;
    public $time;

    public $dateSelected;
    public $timeList;

    public function mount(InfoConsultant $infoConsultant)
    {
        $this->infoConsultant = $infoConsultant;
    }

    public function render()
    { 
        $period = CarbonPeriod::create(Carbon::now()->add(2, 'day'), Carbon::now()->add(8, 'day'));
        $period->locale('id_ID');

        $dateSelect = Carbon::create($this->date)->format('l');

        $this->timeList = MeetConsultationSchedule::select('time')->where('consultant_id', $this->infoConsultant->consultant_id)
                                                    ->where('day', $dateSelect)->get();

        $this->dateSelected = Carbon::parse($this->date);

        return view('livewire.meet-consultant.show-meet-consultant', [
            'periods' => $period,
        ])->extends('layouts.app');
    }

    public function resetTime()
    {
        $this->reset('time');
    }

    public function save()
    {
        $validatedData = $this->validate([
            'date' => ['required', 'date', 'after_or_equal:'.Carbon::now()->add(2, 'day')->toDateString()],
        ]);

        $validatedData['order_id'] = Str::uuid()->toString();
        $validatedData['date'] = Carbon::parse($this->date . ' ' . $this->time);
        $validatedData['due_date'] = Carbon::parse(Carbon::now())->add(1, 'day')->toDateTimeString();
        $validatedData['consultant_id'] = $this->infoConsultant->consultant_id;
        $validatedData['customer_id'] = auth()->user()->id;
        $validatedData['price'] = $this->infoConsultant->price;
        
        MeetConsultationOrder::create($validatedData);

        return redirect()->to(route('index.meet.cart'));
    }
}
