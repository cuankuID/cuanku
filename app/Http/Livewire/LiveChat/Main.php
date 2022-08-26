<?php

namespace App\Http\Livewire\LiveChat;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.live-chat.main')->extends('layouts.app');
    }
}
