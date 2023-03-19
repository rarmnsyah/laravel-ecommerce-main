<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UserDaftarComponent extends Component
{
    // public $name;

    // public function mount()
    // {
    //     $this->name = Auth::user()->name;
    // }

    // public function submitForm()
    // {
    //     User::update(['name' => $this->name]);
    // }

    public function render()
    {
        return view('livewire.user.user-daftar-component');
    }
}
