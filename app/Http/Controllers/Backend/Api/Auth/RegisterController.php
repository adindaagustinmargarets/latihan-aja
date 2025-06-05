<?php

namespace App\Http\Controllers\Backend\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validasi input dari request
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:2|confirmed',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validasi Gagal',
                'errors' => $e->errors(),
            ], 422); // 422 = Unprocessable Entity
        }

        // Generate API token
        $apiToken = bin2hex(random_bytes(32));

        // Simpan user baru ke database
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'api_key' => $apiToken
        ]);

        // Kirim response JSON jika berhasil
        return response()->json([
            'message' => 'Registrasi Berhasil',
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
            'api_key' => $user->api_key,
        ], 201);
    }
}
