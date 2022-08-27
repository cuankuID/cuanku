<?php

namespace App\Http\Livewire\AnswerQuestion;

use Livewire\Component;
use App\Models\AskConsultant;

class ShowAnswerQuestion extends Component
{
    public $askConsultant;
    public $answer;

    protected $listeners = [
        'refreshComponent' => '$refresh'
    ];

    public function mount(AskConsultant $askConsultant)
    {
        $this->askConsultant = $askConsultant;
    }

    public function render()
    {
        return view('livewire.answer-question.show-answer-question')->extends('layouts.app');
    }

    public function answerQuestion()
    {
        $validatedData = $this->validate([
            'answer' => ['required'],
        ]);

        $validatedData['consultant_id'] = auth()->id();
        $validatedData['status'] = 'Terjawab';
        AskConsultant::where('id', $this->askConsultant->id)->update($validatedData);
        
        $this->reset('answer');

        // session()->flash('success', 'Data berhasil ditambahkan!');
        return $this->emit('refreshComponent');
    }
}
