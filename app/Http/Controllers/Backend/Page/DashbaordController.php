<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    public function dashboard()
    {
        return response()->json([
            'status' => 'Halaman Dashbaord'
        ]);
    }
}
