<div class="form-row">
    <div class="form-group col-md-6">
        <label>Provinsi</label>
        <select wire:model="province_id" name="province_id" class="form-control" required>
            <option value="{{ $oldProvince_id[0] }}" selected>{{ $oldProvince[0 ] }}</option>
            @foreach ($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>
        @error('province_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
    </div>    

    <div class="form-group col-md-6">
        <label>Kabupaten/Kota</label>
        <select class="form-control" wire:click="cityByOldValue" name="city_id" required>
            @if(!is_null($province_id))
            @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
            @else
            <option value="{{ $oldCity_id[0] }}" selected>{{ $oldCity[0] }}</option>
            @endif
        </select>
        @error('city_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
    </div>
</div>
