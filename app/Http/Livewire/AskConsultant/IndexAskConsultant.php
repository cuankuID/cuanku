<?php

namespace App\Http\Livewire\AskConsultant;

use Livewire\Component;
use App\Models\AskConsultant;

class IndexAskConsultant extends Component
{
    public $question;
    public $search;

    protected $listeners = [
        'refreshComponent' => '$refresh'
    ];

    public function updateSearch()
    {
        $search = $this->search;
    }

    public function render()
    {
        $questions = AskConsultant::where('question','like', '%'.$this->search.'%')
                                    ->orWhere('answer','like', '%'.$this->search.'%')
                                    ->latest()->paginate(10);

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
        return redirect('/dashboard/ask-consultant');
    }

    public function deleteQuestion($id)
    {
        $question = AskConsultant::where('id', $id)->first();

        $question->delete();
        return $this->emit('refreshComponent');
    }
}
