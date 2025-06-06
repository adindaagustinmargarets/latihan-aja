<?php

namespace App\Http\Controllers\Auth\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AkunController extends Controller
{
    public function login_view()
    {
        return view('auth.akun.login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:2',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'harus Berupa Email',
            'password.required' => 'Password Wajib diisi',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // ganti sesuai tujuan
        }
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }
}
