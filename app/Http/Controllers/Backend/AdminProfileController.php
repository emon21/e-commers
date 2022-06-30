<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function AdminProfile()
    {
     // $adminData = User::find(1);
      $user = Auth::user();
     // return $user;
      return view('admin.profile.admin_profile',compact('user'));
    }
}
