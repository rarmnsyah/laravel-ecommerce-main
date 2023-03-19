<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class UserDashboardComponent extends Component
{
    use WithFileUploads;
    public $user_id;
    public $name;
    public $email;
    public $image;
    public $provinsi;
    public $kabupaten;
    public $jenis_kelamin;
    public $nomor_telepon;
    public $alamat;
    public $newimage;

    public function render()
    {
        return view('livewire.user.user-dashboard-component');
    }

    public function mount($user_id){
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->image = $user->image;
        $this->provinsi = $user->provinsi;
        $this->kabupaten = $user->kabupaten;
        $this->jenis_kelamin = $user->jenis_kelamin;
        $this->nomor_telepon = $user->nomor_telepon;
        $this->alamat = $user->alamat;
    }

    public function updateUser(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        if($this->newimage){
            // unlink('assets/imgs/categories/'.$category->newimage);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('categories',$imageName);
            $category->image = $imageName;
        }
        $category->is_popular = $this->is_popular;
        $category->save();
        session()->flash('message', 'Category has been updated successfully!');
    }

    // public function anjay()
    // {
    //     return view('livewire.user.user-dashboard-component');
    // }
}
