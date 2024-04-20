<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facedes\Hash;
use Illuminate\Models\User;


class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function login_proses(Request $request){
        $request->validate([
            'email'  => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email'  => $request->email,
            'password'  => $request->password
        ];

       if(Auth::attempt($data)){
        return redirect()->route('admin.dashboard');

       }else{
        redirect()->route('login') ->with('failed','Email atau Password Salah' );
       }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }

    public function register(){
        return view('auth.register');
    }

    public function register_proses( Request $request){
        $request->validate([
            'nama' => 'required',
            'email'  => 'required|email|unique:users,email',
            'password'  => 'required|min:6'
        ]);
 
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ];

        $user = User::create($data);

        $data = [
            'email'  => $request->email,
            'password'  => $request->password
        ];

       if(Auth::attempt($data)){
        return redirect()->route('admin.dashboard')->with('success', 'Registration successful!');

       }else{
        redirect()->route('login') ->with('failed','Email atau Password Salah' );
       }

    }
}
