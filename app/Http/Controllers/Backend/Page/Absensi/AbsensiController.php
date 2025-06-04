<?php

namespace App\Http\Controllers\Backend\Page\Absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function absensi_json()
    {
        $absensi = Absensi::all();
        return response()->json([
            'absensi' => $absensi
        ]);
    }
    public function absensi(Request $request)
    {
        $absensi = Absensi::create([
            'nama_lengkap' => $request->nama_lengkap,
            'waktu' => now(),
        ]);
        return response()->json([
            'success' => 'Berhasil Absensi',
            'data' => [
                'nama_lengkap' => $absensi->nama_lengkap,
                'waktu' => $absensi->waktu,
            ]
        ]);
    }
    public function reset_absensi()
    {
        Absensi::truncate();
        return response()->json([
            'success' => 'berhasil melakukan reset'
        ]);
    }
}
