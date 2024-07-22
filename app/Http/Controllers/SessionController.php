<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index(){
        return view('layouts.login');
    }
    public function login(Request $request){
        $validated_data = $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ], [
           'email.required'=> 'Email wajib diisi',
           'password.required' => 'Password wajib diisi', 
        ]);

        $info_login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($info_login)){
            if(Auth::user()->role == 'pasien'){
                return redirect('/dashboard-user');
            }
            elseif(Auth::user()->role == 'admin'){
                return redirect('/dashboard');
            }
        }
        else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    public function sudahLogin(){
        return view('layouts.login-lagi');
    }
}