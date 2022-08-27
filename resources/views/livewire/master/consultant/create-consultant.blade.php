@section('general-css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('style')
<style>
    /* hide attach file trix */
    .trix-button-group.trix-button-group--file-tools {
        display:none;
    }
</style>
@endsection

<div>
    <div class="main-content">
        <section class="section">
        @include('components.header-app', ['title' => 'Tambah Informasi Konsultan'])

            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Konsultan</h4>
                        </div>
                        <div class="card-body">
                            <fieldset disabled>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}">
                                    </div>
            
                                    <div class="form-group col-md-6">
                                        <label>Username</label>
                                        <input type="text" class="form-control" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        {{-- @dd($errors) --}}
                        <div class="card-header">
                            <h4>Tambah Data Informasi Konsultan</h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="save">
                                
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="imgInput">Foto</label>
                                        <div wire:loading.block wire:target="photo" wire:key="photo"><i class="fa fa-spinner fa-spin mt-2 ml-2 mb-2"></i> Uploading</div>
                                        @if ($photo)
                                        <p>Image Preview:</p>
                                        <img class="img-fluid mb-3 col-sm-3" src="{{ $photo->temporaryUrl() }}">
                                        @endif
                                        <input type="file" wire:model.defer="photo" id="imgInput" class="form-control @error('photo') is-invalid @enderror">
                                        @error('photo') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>    
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Provinsi</label>
                                        <div wire:ignore>
                                            <select class="form-control @error('province') is-invalid @enderror" id="selectProvince" required>
                                                <option selected></option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->name }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('province') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>    
                                
                                    <div class="form-group col-md-4">
                                        <label>Kabupaten/Kota</label>
                                        <div wire:ignore>
                                            <select class="form-control @error('city') is-invalid @enderror" id="selectCity" required>
                                                <option selected></option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('city') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Alamat Lengkap</label>
                                        <input type="text" wire:model.defer="full_address" class="form-control @error('full_address') is-invalid @enderror" placeholder="Jalan, Desa, Kelurahan, Kecamatan">
                                        @error('full_address') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="selectOffice">Kantor Bekerja</label>
                                        <div wire:ignore>
                                            <select class="form-control @error('office_id') is-invalid @enderror" id="selectOffice" required>
                                                <option value=""></option>
                                                @foreach ($offices as $office)
                                                    <option value="{{ $office->id }}">{{ $office->name }}</option>
                                                @endforeach
                                            </select>    
                                        </div>
                                        @error('office_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
            
                                    <div class="form-group col-md-6">
                                        <label>Keahlian Spesialis</label>
                                        <input type="text" wire:model.defer="specialist" class="form-control @error('specialist') is-invalid @enderror" placeholder="e.g. Konsultan Pajak, Konsultan Akuntansi" required>
                                        @error('specialist') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label>Pengalaman bekerja</label>
                                        <div class="input-group mb-2">
                                            <input type="text" wire:model.defer="work_experience" class="form-control @error('work_experience') is-invalid @enderror text-left" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">Tahun</div>
                                            </div>
                                            @error('work_experience') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
    
                                    <div class="form-group col-md-4">
                                        <label>Harga Bayaran / Konsultasi</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp.</div>
                                            </div>
                                            <input type="text" wire:model.defer="price" class="form-control @error('price') is-invalid @enderror" required>
                                            @error('price') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                    </div>    
                                </div>
                                {{-- <div class="form-group" x-data="{ trix: @entangle('biography').defer }">
                                    <label>Biografi Konsultan</label>
                                    <input id="biography" name="biography" type="hidden" />
                                        <div wire:ignore>
                                            <trix-editor x-model.debounce.300ms="trix" input="biography">
                                            </trix-editor>
                                        </div>
                                    @error('biography') <span class="error">{{ $message }}</span> @enderror
                                </div> --}}

                                <div class="form-group">
                                    <label>Biografi Konsultan</label>
                                    <input id="biography" type="hidden">
                                        <div wire:ignore>
                                            <trix-editor wire:model.defer="biography" input="biography"></trix-editor>
                                        </div>
                                        @error('biography') <span class="error text-danger">{{ $message }}</span> @enderror    
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@push('script')
    <script>
        // select2 script
        $(document).ready(function () {
            $('#selectProvince').select2();
            $('#selectProvince').on('change', function (e) {
                var item = $('#selectProvince').select2("val");
                @this.set('province', item);
            });

            $('#selectCity').select2();
            $('#selectCity').on('change', function (e) {
                var item = $('#selectCity').select2("val");
                @this.set('city', item);
            });

            $('#selectOffice').select2();
            $('#selectOffice').on('change', function (e) {
                var item = $('#selectOffice').select2("val");
                @this.set('office_id', item);
            });
        });

        // trix hidden attach file
            document.addEventListener("trix-file-accept", function(event) {
                event.preventDefault();
            });
    </script>
@endpush
