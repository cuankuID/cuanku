<?php

namespace App\Http\Livewire\AnswerQuestion;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AskConsultant;

class IndexAnswerQuestion extends Component
{
    use WithPagination;

    public $status;
    public $search;
    
    protected $paginationTheme = 'bootstrap';

    public function updateSearch()
    {
        $search = $this->search;
    }
    
    public function render()
    {
        $questions = AskConsultant::where('status', $this->status)->latest()->paginate(10);

        // $questions = ConsultantOffice::where('name', 'like', '%'.$this->search.'%')
        //             ->orWhereHas('city', function($query) {
        //                 return $query->where('name', 'like', '%' . $this->search . '%');
        //             })
        //             ->orWhereHas('province', function($query) {
        //                 return $query->where('name', 'like', '%' . $this->search . '%');
        //             })->paginate($this->perPage);

        return view('livewire.answer-question.index-answer-question', [
            'questions' => $questions
        ])->extends('layouts.app');
    }
}
