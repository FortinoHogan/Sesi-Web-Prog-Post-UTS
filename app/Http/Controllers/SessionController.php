<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        // 1. helper session
        session(['role' => 'admin']);

        // 2. method $request
        $request->session()->put('role', 'admin');

        // 3. method Session
        Session::put('role', 'admin');
    }

    public function panggilSession(Request $request)
    {
        session('role');

        $request->session()->get('role');

        Session::get('role');
    }
}
