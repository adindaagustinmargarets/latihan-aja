<?php

namespace App\Http\Controllers\Backend\Page\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        return view('backend.page.admin.absensi.index', compact('absensi'));
    }
    public function tambah(Request $request)
    {
        Absensi::create([
            'nama_lengkap' => $request->nama_lengkap,
            'waktu' => now(),
        ]);
        return back()->with('success', 'berhasil tambah absensi');
    }
    public function hapus($id)
    {
        $absensi = Absensi::find($id);
        $absensi->delete();
        return back()->with('success', 'berhasil hapus absensi');
    }
}
