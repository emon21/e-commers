<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
   public function index()
   {
      return view('admin.index');
   }


   //login from
   public function LoginForm()
   {
      return view('auth.admin_login');
   }

    //logout
    public function logout()
    {
       auth()->logout();
       return redirect()->route('admin')->with('success','You have been Successfull logged out');
 
    }
}
