<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangeUserType extends Controller
{
    public function index(){
        return view('auth.update');
    }

    public function update(User $user){
        $validatedData['utype'] = 'ADM';

        User::where('id', $user->id)->update($validatedData);

        return redirect('/')->with('success', 'User has been Updated to Saler');
    }
}
