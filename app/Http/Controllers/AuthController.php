<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        $res =  Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if($res){
           return redirect()->route('dashboard');
        }
        return back()->with('failed','Invalid Details');
    }

    public function loginSeeder(){
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345');
        $user->type = '1';
        $user->save();
    }
}
