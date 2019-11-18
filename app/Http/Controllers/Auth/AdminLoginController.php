<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function __contruction(){
        $this->middleware('guest:admin');
    }

    public function login(Request $request)
    {
        return true;
    }

    public function index()
    {
        return view('admin-login');
    }
}
