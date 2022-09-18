<?php

namespace App\Http\Livewire\AnswerQuestion;

use Livewire\Component;
use App\Models\AskConsultant;

class EditAnswerQuestion extends Component
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
        return view('livewire.answer-question.edit-answer-question')->extends('layouts.app');
    }

    public function editAnswer()
    {
        $validatedData = $this->validate([
            'answer' => ['required'],
        ]);

        AskConsultant::where('id', $this->askConsultant->id)->update($validatedData);
        
        $this->reset('answer');

        // session()->flash('success', 'Data berhasil ditambahkan!');
        return $this->emit('refreshComponent');
    }
}

