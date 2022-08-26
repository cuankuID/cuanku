<?php

namespace App\Http\Livewire;

use App\Models\Province;
use App\Models\City;
use App\Models\ConsultantOffice;
use Livewire\Component;

class ProvinceCityDropdown extends Component
{
    public $getCollection = [];
    public $oldProvince;
    public $oldProvince_id;
    public $oldCity;
    public $oldCity_id;
    public $province_id;
    public $provinces;
    public $cities;
    public $slug;

    public function mount()
    {
        $getSlug = explode('/', url()->current());
        $this->slug = end($getSlug);
        $getCollection = ConsultantOffice::where('slug', $this->slug)->get();
        
        $this->oldProvince_id = $getCollection->pluck('province_id');
        $this->oldProvince = $getCollection->pluck('province.name');
        $this->oldCity_id = $getCollection->pluck('city_id');
        $this->oldCity = $getCollection->pluck('city.name');


        $this->provinces = Province::all();
        $this->cities = collect();
    }

    public function updatedProvinceId($province_id)
    {
        if (!is_null($province_id)) {
            $this->cities = City::where('province_id', $province_id)->get();
        }
    }

    public function cityByOldValue()
    {
        $this->cities = City::where('province_id', $this->oldProvince_id[0])->get();
    }

    public function render()
    {
        return view('livewire.province-city-dropdown');
    }
}
