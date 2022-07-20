<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
      $categories = Category::orderBy('category_name_en', 'ASC')->get();
     // $subcategories = SubCategory::Where('category_id', $category->id)->orderBy('subcategory_name_en', 'ASC')->get();
     // $subsubcategories = SubSubCategory::Where('subcategory_id', $sub->id)->orderBy('sub_subcategory_name_en', 'ASC') ->get();
      return view('frontend.index',compact('categories'));
    }

    //user Logout
    public function UserLogout()
    {
      Auth::logout();
      return redirect()->route('login');
    }

    //User Profile
    public function UserProfile()
    {
      $id = Auth::user()->id;
     // return $id;
      $user = User::find($id);
     // return $user;
      return view('user.user_profile',compact('user'));
    }

    //Update Profile
    public function UserProfileUpdate(Request $request)
    {
      //return $request->all();
      $user = Auth::user();
      $user->name = $request->name; 
      $user->email = $request->email; 
      $user->phone = $request->phone; 

      //User Profile Change
      if($request->hasFile('profile_photo')) { 
         //delete File
         // if(file_exists($user->profile_photo)){
         //    unlink($user->profile_photo);
         //    }
         //file upload
         $file = $request->file('profile_photo');
         @unlink(public_path('upload/user_images/'.$user->profile_photo));
         $filename = time() . '.' .$file->getClientOriginalextension();
         $file->move(public_path('upload/user_images/'), $filename); 
         $user['profile_photo'] = $filename;
      }
      $user->save();
      $notification = array(
         'message' => 'User Profile Update Successfully','Admin',
         'alert-type' => 'success'
      );
     // Toastr::success('Admin Profile Changed Successfully', 'Admin', ["positionClass" => "toast-top-right","progressBar" => true,]);

      return redirect()->route('user.dashboard')->with($notification);

    }


    public function UserPasswordChange()
    {
      $id = Auth::user()->id;
      $user = User::find($id);
     return view('user.profile.user_password',compact('user'));
    }

    public function UserPasswordUpdate(Request $request)
    {
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
            return redirect()->route('login')->with('message', 'password update successfully, please login now !');
         }

         else{
         return redirect()->route('admin.profile');
         }
    }
}
