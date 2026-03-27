<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function sellerLogin(){
        return view('seller.login');
    }

    public function sellerRegister(){
        return view('seller.register');
    }

    public function Nocart(){
        return view('nocart');
    }
    public function Registorhandel(Request $request){

        $validated = $request->validate([
                'name'=>'required|max:30',
                'phone'=>'required|digits:10',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:10'

        ]);
        $storedata = User::create([
                    'name'=>$validated['name'],
                    'phone'=>$validated['phone'],
                    'email'=>$validated['email'],
                    'password'=>$validated['password'],
        ]);
        return redirect()->route('Loginpage');
    }

    public function Loginhandel(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

       if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
