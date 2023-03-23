<?php

namespace App\Http\Livewire\User;

use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Carbon\Carbon;


class UserDashboardComponent extends Component
{
    use WithFileUploads;
    public $user_id;
    public $name;
    public $email;
    public $image;
    public $provinsi;
    public $kabupaten;
    public $kode_pos;
    public $jenis_kelamin;
    public $nomor_telepon;
    public $tanggal_lahir;
    public $alamat;
    public $newimage;
    public $phone_number;

    public function render()
    {
        return view('livewire.user.user-dashboard-component', [
            'provinces' => Province::all(),
            'regencys' => Regency::all()
        ]);
    }

    public function mount($user_id){
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->image = $user->image;
        $this->provinsi = $user->provinsi;
        $this->kabupaten = $user->kabupaten;
        $this->kode_pos = $user->kode_pos;
        $this->jenis_kelamin = $user->jenis_kelamin;
        $this->tanggal_lahir = $user->tanggal_lahir;
        $this->nomor_telepon = $user->nomor_telepon;
        $this->alamat = $user->alamat;
        $this->phone_number = $user->phone_number;
    
    }

    public function updateUser(){

        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9'
        ]);
        $user = user::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        if($this->newimage){
            // unlink('assets/imgs/categories/'.$user->newimage);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('categories',$imageName);
            $user->image = $imageName;
        }
        $user->tanggal_lahir = $this->tanggal_lahir;
        $user->jenis_kelamin = $this->jenis_kelamin;
        $user->provinsi = $this->provinsi;
        $user->kabupaten = $this->kabupaten;
        $user->alamat = $this->alamat;
        $user->kode_pos = $this->kode_pos;
        $user->phone_number = $this->phone_number;
        $user->save();
        session()->flash('message', 'Profil berhasil diperbarui!');
    }

    // public function anjay()
    // {
    //     return view('livewire.user.user-dashboard-component');
    // }
}
