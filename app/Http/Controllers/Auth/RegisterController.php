<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register'); 
    }

    public function create(Request $request){
        $this->validate($request, [
            "name" => "required",
            "email" => "required|email",
            "password" => "required|confirmed"
        ]); 

        User::create([
            'name' => $request->name, 
            'email' => $request->email, 
            'password' => Hash::make($request->password)
        ]); 

        return redirect('/');
    }
}
