<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        return view('register.register');
    }

    public function doRegister(Request $request)
    {
        // fungsi validasi sebelum melakukan register
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100', 'email', 'unique:' . AuthUser::class],
            'password' => ['required', 'confirmed', Rules\password::defaults()],
        ]);

        // insert data user dengan menggunakan validasi
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // langsung memberikan akses login setelah melakukan register
        Auth::login($user);

        return redirect('/home');
    }

    public function index()
    {
        return view('login.index');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return view('login.index');
        // return back()->with('loginError', 'login gagal!');

    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}