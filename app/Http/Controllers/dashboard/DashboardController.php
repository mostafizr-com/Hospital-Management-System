<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index()
    {
        return view('cp/index');
    }
    function medicare_settings()
    {
        return view('cp.medicare-settings');
    }

    public function Logout(){
        
        auth()->logout();

        return redirect('/login');
      }
}
