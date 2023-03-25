<div>
    <main class="main mb-3 mt-3">
        <div class="container-fluid">
            <div class="card card-body blur shadow-blur mx-auto col-lg-8 mt-n6">
                <div class="row gx-4">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            @if (auth()->user()->image)
                                <img src="{{ asset('assets/imgs/profile') }}/{{auth()->user()->image}}" alt="..."
                                    class="border-radius-lg shadow-sm" width="200">
                            @else
                                <img src="{{ asset('assets/imgs/profile/download.png') }}" alt="..."
                                    class="border-radius-lg shadow-sm" width="200">
                            @endif
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                {{ __('Lope You From YTTA Company') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card mx-auto col-lg-8">

                <div class="card-header pb-2 px-3">
                    <h6 class="mb-0">{{ __('Profile Information') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    {{-- <form action="{{ route('dashboard.store'), ['user_id' => auth()->type()->id]}}" method="POST" role="form text-left"> --}}
                    <form wire:submit.prevent="updateUser">
                        @csrf
                        @if ($errors->any())
                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                                <span class="alert-text text-white">
                                    {{ $errors->first() }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success"
                                role="alert">
                                <span class="alert-text text-white">
                                    {{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">{{ __('Full Name') }}</label>
                                    <div class="@error('name')border border-danger rounded-3 @enderror">
                                        <input class="form-control" value="{{ auth()->user()->name }}" type="text"
                                            placeholder="Name" id="name" wire:model="name" name="name">
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-control-label">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input class="form-control" value="{{ auth()->user()->email }}" type="email"
                                            placeholder="@example.com" id="email" wire:model="email" name="email">
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin"
                                        class="form-control-label">{{ __('Jenis Kelamin') }}</label>
                                    <div class="@error('jenis_kelamin') border border-danger rounded-3 @enderror">
                                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin"
                                            wire:model="jenis_kelamin">
                                            <option value="Laki-Laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir"
                                        class="form-control-label">{{ __('Tanggal Lahir') }}</label>
                                    <div class="@error('tanggal_lahir') border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="date" placeholder="" id="tanggal_lahir"
                                            wire:model="tanggal_lahir" name="tanggal_lahir"
                                            value="{{ auth()->user()->tanggal_lahir }}">
                                        @error('tanggal_lahir')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number"
                                        class="form-control-label">{{ __('Nomor Handphone (Whatsapp)') }}</label>
                                    <div class="@error('phone_number')border border-danger rounded-3 @enderror">
                                        <input class="form-control" value="{{ auth()->user()->phone_number }}"
                                            type="text" placeholder="" id="phone_number"
                                            wire:model="phone_number" name="phone_number">
                                        @error('phone_number')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provinsi" class="form-control-label">{{ __('Provinsi') }}</label>
                                    <div class="@error('provinsi') border border-danger rounded-3 @enderror">
                                        <select name="provinsi" class="form-control" id="provinsi"
                                            wire:model="provinsi">
                                            @foreach ($provinces as $province)
                                                @if (old('provinsi', auth()->user()->provinsi) == $province->id)
                                                    <option value="{{ $province->id }}" selected>
                                                        {{ $province->name }}</option>
                                                @endif
                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kabupaten" class="form-control-label">{{ __('Kabupaten') }}</label>
                                    <div class="@error('kabupaten') border border-danger rounded-3 @enderror">
                                        <select name="kabupaten" class="form-control" id="kabupaten"
                                            wire:model="kabupaten">
                                            @foreach ($regencys as $regency)
                                                @if (old('kabupaten', auth()->user()->kabupaten) == $regency->id)
                                                    <option value="{{ $regency->id }}" selected>{{ $regency->name }}
                                                    </option>
                                                @endif
                                                <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode_pos" class="form-control-label">{{ __('Kode Pos') }}</label>
                                    <div class="@error('kode_pos') border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text" id="kode_pos"
                                            wire:model="kode_pos" name="kode_pos"
                                            value="{{ auth()->user()->kode_pos }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newimage" class="form-control-label">{{ __('Ganti Gambar') }}</label>
                            <div class="@error('newimage') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="file" id="newimage" wire:model="newimage"
                                    name="newimage" value="{{ auth()->user()->newimages }}">
                                @if ($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}" width="120" />
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">{{ 'Detail Alamat' }}</label>
                            <div class="@error('alamat')border border-danger rounded-3 @enderror">
                                <textarea class="form-control" id="alamat" wire:model="alamat" rows="3" name="alamat">{{ auth()->user()->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit"
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
</div>
