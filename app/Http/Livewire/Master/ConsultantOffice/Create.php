<?php

namespace App\Http\Livewire\Master\ConsultantOffice;

use Livewire\Component;
use App\Models\Province;
use App\Models\City;
use App\Models\ConsultantOffice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $information;
    public $phone;
    public $email;
    public $website;
    public $province_id;
    public $city_id;
    public $full_address;
    public $lat;
    public $long;

    public $provinces;
    public $cities;

    protected $rules = [
        'name' => ['required', 'regex:/[a-zA-Z0-9\s]+/', 'max:255'],
        'image' => ['nullable', 'image', 'file', 'max:1024'],
        'information' => ['nullable'],
        'phone' => ['nullable', 'numeric', 'digits_between:10,13', 'starts_with:0'],
        'email' => ['nullable', 'email'],
        'website' => ['nullable', 'url'],
        'province_id' => ['required'],
        'city_id' => ['required'],
        'full_address' => ['nullable'],
        'lat' => ['required', 'numeric'],
        'long' => ['required', 'numeric']
    ];

    public function mount()
    {
        $this->provinces = Province::all();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.master.consultant-office.create');
    }

    public function updatedProvinceId($province_id)
    {
        if (!is_null($province_id)) {
            $this->cities = City::where('province_id', $province_id)->get();
        }
    }

    public function save()
    {
        $validatedData = $this->validate();

        $validatedData['slug'] = Str::slug($this->name, '-');

        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $validatedData['image'] = $this->image->storeAs('consultant-office-images', $imageName);

        ConsultantOffice::create($validatedData);
        
        session()->flash('success', 'Data berhasil ditambahkan!');

        return redirect()->to(route('master.index.office-consultant'));
    }
}
