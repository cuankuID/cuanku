<div class="card-body">
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label>Nama Kantor</label>
            <input type="text" wire:model.defer="name" class="form-control @error('name') is-invalid @enderror" required autofocus>
            @error('name')
                <div class="invalid-feeback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="imgInput">Foto Kantor</label>
            <div wire:loading.block wire:target="image" wire:key="image"><i class="fa fa-spinner fa-spin mt-2 ml-2 mb-2"></i> Uploading</div>
            @if ($image)
            <p>Image Preview:</p>
            <img class="img-fluid mb-3 col-sm-3" src="{{ $image->temporaryUrl() }}">
            @endif
            <input type="file" wire:model.defer="image" id="imgInput" class="form-control">
        </div>
    
        <div class="form-group">
            <label>Informasi Kantor</label>
            <input id="information" type="hidden" wire:model.defer="information">
            <trix-editor input="information"></trix-editor>  
            @error('information') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>No.Telepon</label>
                <input type="text" wire:model.defer="phone" class="form-control @error('phone') is-invalid @enderror" autofocus>
                @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group col-md-4">
                <label>Email</label>
                <input type="email" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" autofocus>
                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
    
            <div class="form-group col-md-4">
                <label>Website</label>
                <input type="url" wire:model.defer="website" class="form-control" autofocus>
                @error('website') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Provinsi</label>
                <select wire:model="province_id" class="form-control" required>
                    <option selected></option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
                @error('province_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>    
        
            <div class="form-group col-md-6">
                <label>Kabupaten/Kota</label>
                <select class="form-control" wire:model.defer="city_id" required>
                    <option selected></option>
                    @if(!is_null($province_id))
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                    @endif
                </select>
                @error('city_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
        </div>
    
        <div class="form-group">
            <label>Alamat Detail</label>
            <input type="text" class="form-control" wire:model.defer="full_address" placeholder="Jalan, Kelurahan, Kecamatan">
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Latitude</label>
                <input type="text" wire:model.defer="lat" class="form-control @error('lat') is-invalid @enderror" value="{{ old('lat') }}" required>
                @error('lat')
                    <div class="invalid-feedbcak">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="form-group col-md-6">
                <label>Longitude</label>
                <input type="text" wire:model.defer="long" class="form-control @error('long') is-invalid @enderror" value="{{ old('long') }}" required>
                @error('long')
                <div class="invalid-feedbcak">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>