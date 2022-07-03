<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\UserDashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// ========================  Admin Route ========================


// =================================== Admin Route ===================================


Route::get('/admin', [AdminDashboard::class, 'LoginForm'])->name('admin');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function (){

   Route::get('dashboard', [AdminDashboard::class,'index'])->name('admin.dashboard');
   Route::get('logout', [AdminDashboard::class, 'logout'])->name('admin.logout');
   //Admin Profile
   
   Route::get('Admin/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');
   Route::get('admin/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');
   Route::post('admin/profile/update',[AdminProfileController::class,'AdminProfileUpdate'])->name('admin.profile.update');

   Route::get('admin/password/change',[AdminProfileController::class,'AdminPasswordChange'])->name('admin.password.change');
   Route::post('admin/password/update',[AdminProfileController::class,'AdminPasswordUpdate'])->name('admin.password.update');
});


// ===================================  User Route  ===================================

Route::middleware(['auth'])->group(function (){

   Route::get('/user/dashboard', [UserDashboard::class, 'dashboard'])->name('user.dashboard');

});

Route::get('/',[IndexController::class,'index']);
Route::get('/user',[IndexController::class,'UserLogout'])->name('user.logout');
Route::get('/user/profile',[IndexController::class,'UserProfile'])->name('user.profile');
Route::post('/user/profile/update',[IndexController::class,'UserProfileUpdate'])->name('user.profile.update');

Route::get('user/password/change',[IndexController::class,'UserPasswordChange'])->name('user.password.change');
Route::post('user/password/update',[IndexController::class,'UserPasswordUpdate'])->name('user.password.update');
