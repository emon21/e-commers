<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function dashboard()
    {
      return view('home');

    }
}
