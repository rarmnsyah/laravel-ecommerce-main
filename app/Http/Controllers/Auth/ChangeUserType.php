<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penjual;
use Illuminate\Support\Facades\DB;

class ChangeUserType extends Controller
{
    public function index(){
        if (auth()->user()->utype === 'USR'){
            return view('auth.update');
        } else {
            return redirect(route('admin.dashboard'))->with('failed', 'User Sudah Terdaftar Sebagai Penjual');    
        }

    }

    public function update(Request $request, User $user){        

        $validatedData = $request->validate([
            'name' => 'required|max:225|min:10',
            'email' => 'required|email:dns'
        ]);
        $validatedData['id_user'] = $user->id;

        Penjual::create($validatedData);
        
        $updateUtype['utype'] = 'ADM';
        User::where('id', $user->id)->update($updateUtype);

        return redirect(route('admin.dashboard'))->with('success', 'User Berhasil Daftar Sebagai Penjual');    
    }
}
