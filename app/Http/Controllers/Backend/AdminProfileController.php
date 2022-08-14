<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
class AdminProfileController extends Controller
{
    //Admin Profile
    public function AdminProfile()
    {
      //$user = User::find(1);
      $adminUser = Auth::user();
     // return $user;
      return view('admin.profile.admin_profile',compact('adminUser'));
    }

    //Admin Edit
    public function AdminProfileEdit()
    {
      $adminEdit = Auth::user();
      //return $adminUser;
      return view('admin.profile.admin_profile_edit',compact('adminEdit'));
    }

    //Admin Update
    public function AdminProfileUpdate(Request $request)
    {
     // return $request->admin_name;
      $user = Auth::user();
      $user->name = $request->admin_name; 
      $user->email = $request->admin_email; 

       //User Profile Change
       if($request->hasFile('profile_photo')) { 
         //delete File
         // if(file_exists($user->profile_photo)){
         //    unlink($user->profile_photo);
         //    }
         //file upload
         $file = $request->file('profile_photo');
         @unlink(public_path('upload/admin_images/'.$user->profile_photo));
         $filename = time() . '.' .$file->getClientOriginalextension();
         $file->move(public_path('upload/admin_images/'), $filename); 
         $user['profile_photo'] = $filename;
      }
      $user->save();

      $notification = array(
         'message' => 'Admin Profile Update Successfully','Admin',
         'alert-type' => 'success'
      );
     // Session::flash('update','Admin Profile Changed Successfully');
    Toastr::success('Admin Profile Changed Successfully', 'Admin', ["positionClass" => "toast-top-right","progressBar" => true,]);
    //Toastr::success('Have fun storming the castle!', 'Miracle Max Says');
      return redirect()->route('admin.profile');

    }

    //Change Password
    public function AdminPasswordChange()
    {
      $adminEdit = Auth::user();

      return view('admin.profile.admin_password_change',compact('adminEdit'));

    }

    //Update Password
    public function AdminPasswordUpdate(Request $request)
    {

      // $validateData = $request->validate([
      //    'current_password' => 'required',
      //    'new_password' => 'required|confirmed',

      // ]);

      $validateData = $request->validate([
         'current_password'=>'required',
         'new_password'=>'required',
         'confirm_password'=>'required|same:new_password'
   ]);

      $hashedPassword = Auth::user()->password;
     //return $hashedPassword;
      if(Hash::check($request->current_password,$hashedPassword)){
         $admin = Auth::user();
         $admin->password = Hash::make($request->new_password);
         $admin->save();
         Auth::logout();
        // return redirect()->route('admin');
         return redirect()->route('admin')->with('message', 'password update successfully, please login now !');
      }

      else{
      return redirect()->route('admin.profile');
      }
      
    }


    public function UserList()
    {
      $users = User::latest()->get();
      return view('admin.user.user_list',compact('users'));
    }

    public function UserActive($id)
    {
      User::findOrFail($id)->update(['status' => 1]);
      $notification = array(
         'message' => 'User Status Active Updated Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('user-list')->with($notification);
      
    }

    public function UserInactive($id)
    {
      User::findOrFail($id)->update(['status' => 0]);
      $notification = array(
         'message' => 'User Status Inactive Updated Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('user-list')->with($notification);
    }
}
