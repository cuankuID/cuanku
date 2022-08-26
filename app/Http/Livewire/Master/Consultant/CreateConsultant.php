<?php

namespace App\Http\Livewire\Master\Consultant;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Province;
use App\Models\City;
use App\Models\InfoConsultant;
use App\Models\ConsultantOffice;

class CreateConsultant extends Component
{
    use WithFileUploads;

    public $user;
    public $provinces;
    public $cities;
    public $offices;
    
    public $consultant_id;
    public $slug;
    public $photo;
    public $province;
    public $city;
    public $full_address;
    public $office;
    public $specialist;
    public $work_experience;
    public $price;
    public $biography;

    protected $rules = [
        'photo' => ['nullable', 'image', 'file', 'max:1024'],
        'province' => ['required'],
        'city' => ['required'],
        'full_address' => ['nullable'],
        'office' => ['required'],
        'specialist' => ['required'],
        'work_experience' => ['required', 'numeric'],
        'price' => ['required', 'numeric'],
        'biography' => ['nullable'],
    ];


    public function mount(User $user)
    {
        $this->user = $user;
        $this->offices = ConsultantOffice::all();

        $this->provinces = Province::all();
        $this->cities = City::all();
    }

    public function render()
    {
        return view('livewire.master.consultant.create-consultant')->extends('layouts.app');
    }

    public function save()
    {
        $validatedData = $this->validate();
        
        $validatedData['consultant_id'] = $this->user->id;
        $validatedData['slug'] = Str::slug($this->user->name, '-');
        $validatedData['photo'] = $this->photo->store('consultant-photos');

        InfoConsultant::create($validatedData);

        session()->flash('success', 'Data berhasil ditambahkan!');
        return redirect()->to(route('master.index.consultant'));
    }
}
