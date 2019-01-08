<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public/welcome');
    }

    function services()
    {
        return view('public.services');
    }

    function doctors()
    {
        return view('public.doctors');
    }

    function blog()
    {
        return view('public.blog');
    }  
    
    function components()
    {
        return view('public.components');
    }  
}
