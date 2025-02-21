<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('/register');
    }




    public function Register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
             'role' => 'required|string|in:user,admin'
        ]);

        User::create([
            'name'=>$request->name, 
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
        ]);

        return redirect('/login');
    }


    public function ShowLoginForm(){

        return view('login');
    }

    public function Login(Request $request){

        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->password , $user->password)){
            session(['user'=> $user]);
            return redirect('/Books');
        }

        return back()->withErrors(['email'=>'Identifier not existing']);

    }

    public function logout(){
        session()->forget('user');
        return redirect('/login');
    }


    public function profile(){
        if(!session('user')) return redirect('/login');
        return view('/profile', ['user' => session('user')]);
    }
  
}
