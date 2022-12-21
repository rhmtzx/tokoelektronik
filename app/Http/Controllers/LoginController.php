<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
    	return view('login.login');
    }	

    public function loginproses(Request $request){

    	$this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6',
        ],[
            'email.required' => 'Email Harus Diisi!',
            'email.exists' => 'Email yang anda masukkan belum terdaftar!',
            'password.required' => 'Password Harus Diisi!',
            'password.min' => 'Password Minimal 6 Huruf',
        ]);
    	if(Auth::attempt($request->only('email','password'))){
    		return redirect('welcome')->with('success', 'Anda Berhasil Login');
    	}
    	return redirect('login')->with('error', 'Email atau Password Yang Anda Masukkan Salah');
    }

    public function register(){
    	return view('login.register')->with('success', 'Anda Berhasil Register');
    }

    public function registeruser(Request $request){

    	$this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ],[
            'email.unique' => 'Email Sudah digunakan',
            'email.required' => 'Harus Diisi!',
            'password.min' => 'Minimal 6 Huruf '
        ]);

      $data =user::create([
         'name' => $request -> name,
         'email' => $request -> email,
         'password' => bcrypt($request->password),
         'remember_token' => Str::random(60),
     ]);	

      return redirect('login');
  }

  public function logout(){
   Auth::logout();
   return \redirect('login');

}}

