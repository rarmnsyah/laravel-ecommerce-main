<x-app-layout>
<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>                    
                    <span></span> Daftar Penjual
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Daftar Penjual</h3>
                                        </div>
                                        {{-- <form method="post" action="{{ route('user.update', ['user_id' => auth()->user()->id])}}"> --}}
                                        <form method="post" action="/user/edit/{{ auth()->user()->id }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-control-label">{{ __('Nama Toko') }}</label>
                                                        <div class="@error('name')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" type="text"
                                                                placeholder="Name" id="name" wire:model="name" name="name">
                                                            @error('name')
                                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email" class="form-control-label">{{ __('Email Toko') }}</label>
                                                        <div class="@error('email')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" type="email"
                                                                placeholder="@example.com" id="email" wire:model="email" name="email">
                                                            @error('email')
                                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>

