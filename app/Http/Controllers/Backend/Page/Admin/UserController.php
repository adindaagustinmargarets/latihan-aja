<?php

namespace App\Http\Controllers\Backend\Page\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('backend.page.admin.user.index', compact('user'));
    }
}
