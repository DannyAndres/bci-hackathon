<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',['user' => Auth::user()]);
    }

    /**
     * Show the application normal registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function normal()
    {
        return view('auth.userType.normal');
    }

    /**
     * Show the application empresa registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function empresa()
    {
        return view('auth.userType.empresa');
    }

    /**
     * Show the application trabajador registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function trabajador()
    {
        return view('auth.userType.trabajador');
    }
}
