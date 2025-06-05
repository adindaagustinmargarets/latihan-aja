<?php

namespace App\Http\Controllers\Backend\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Gagal Melakukan Login'], 401);
        }
        $user = Auth::user();
        return response()->json([
            'message' => 'Berhasil Login Mengunakan Api',
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
            'api_key' => $user->api_key,
        ], 201);
    }
}
