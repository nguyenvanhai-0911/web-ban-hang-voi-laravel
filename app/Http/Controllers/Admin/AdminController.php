<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return view("layout_admin");
    }

    public function show_dashboard(){
        return view("admin.dashboard");
    }

    public function getLogin()
    {
        if (Auth::check()) {
            return view('layout_admin');
        } else {
            return view('login');
        }
    }
    public function postLogin(request $request)
    {
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
            'status'    =>1
        ];
        if (Auth::attempt($login)) {
            return view('layout_admin')->with('name',Auth::User()->name);
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('login');
    }
}
