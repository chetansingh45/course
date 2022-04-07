<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::where('type', '!=' ,'1')->get();
        return view('admin.users.list',compact('users'));
    }
}
