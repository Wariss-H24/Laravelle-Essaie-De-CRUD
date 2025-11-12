<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $validatedUser = $request->validate([
            "_token" => "required",
            "name" => "required|string|min:3|max:255",
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            "password_confirmation" => "required|same:password",
        ]);
        $user= User::create($validatedUser);

        return redirect()->route("login")->with("success","Compte créé avec succès. Veuillez vous connecter.");
    }
}