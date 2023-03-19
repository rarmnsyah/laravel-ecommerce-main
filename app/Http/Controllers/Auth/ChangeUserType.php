<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangeUserType extends Controller
{
    public function index(){
        if (auth()->user()->utpe == 'USR'){
            return view('auth.update');
        } else {
            return redirect('/');    
        }
    }

    public function update(User $user){
        $validatedData['utype'] = 'ADM';

        User::where('id', $user->id)->update($validatedData);

        return redirect(route('admin.dashboard'))->with('success', 'User has been Updated to Saler');    
    }
}
