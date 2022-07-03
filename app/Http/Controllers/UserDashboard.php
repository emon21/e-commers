<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Controller
{
    public function dashboard()
    {
      $user = Auth::user();
      return view('user.dashboard',compact('user'));

    }
}
