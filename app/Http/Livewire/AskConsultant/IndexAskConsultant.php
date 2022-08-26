<?php

namespace App\Http\Livewire\AskConsultant;

use Livewire\Component;
use App\Models\AskConsultant;

class IndexAskConsultant extends Component
{
    public $question;

    protected $listeners = [
        'refreshComponent' => '$refresh'
    ];

    public function render()
    {
        $questions = AskConsultant::latest()->paginate(10);

        return view('livewire.ask-consultant.index-ask-consultant', [
            'questions' => $questions
        ])->extends('layouts.app');
    }

    public function sendQuestion()
    {
        $validatedData = $this->validate([
            'question' => ['required'],
        ]);

        $validatedData['user_id'] = auth()->id();
        AskConsultant::create($validatedData);
        
        $this->reset('question');

        // session()->flash('success', 'Data berhasil ditambahkan!');
        return $this->emit('refreshComponent');
    }

    public function deleteQuestion($id)
    {
        $question = AskConsultant::where('id', $id)->first();

        $question->delete();
        return $this->emit('refreshComponent');
    }
}
