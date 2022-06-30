<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\UserDashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// =================================== Admin Controller Route Start  ===================================


Route::get('/admin', [AdminDashboard::class, 'LoginForm']);

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function (){

   Route::get('dashboard', [AdminDashboard::class,'index'])->name('admin.dashboard');
   Route::get('logout', [AdminDashboard::class, 'logout'])->name('admin.logout');
   //Admin Profile
   Route::get('AdminProfile',[AdminProfileController::class,'AdminProfile'])->name('AdminProfile');

});


// ========================  User Route  ========================
Route::middleware(['auth'])->group(function (){


   Route::get('/user/dashboard', [UserDashboard::class, 'dashboard'])->name('user.dashboard');

});
