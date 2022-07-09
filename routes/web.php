<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\backend\SubCategoryController;
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



//brand all route
Route::prefix('brand')->group(function(){

   Route::get('/view',[BrandController::class,'BrandView'])->name('all.brand');
   Route::get('/create',[BrandController::class,'BrandCreate'])->name('brand.create');
   Route::post('/store',[BrandController::class,'BrandStore'])->name('brand.store');
   Route::get('/edit/{brand}',[BrandController::class,'BrandEdit'])->name('brand.edit');
   Route::post('/update',[BrandController::class,'BrandUpdate'])->name('brand.update');
   Route::get('/delete/{id}',[BrandController::class,'BrandDelete'])->name('brand.delete');

});

//AdminCategory all Route
Route::prefix('category')->group(function(){

   Route::get('/view',[CategoryController::class,'CategoryView'])->name('all.category');
   Route::get('/create',[CategoryController::class,'CategoryCreate'])->name('category.create');
   Route::post('/store',[CategoryController::class,'CategoryStore'])->name('category.store');
   Route::get('/edit/{id}',[CategoryController::class,'CategoryEdit'])->name('category.edit');
   Route::post('/update',[CategoryController::class,'CategoryUpdate'])->name('category.update');
   Route::get('/delete/{id}',[CategoryController::class,'CategoryDelete'])->name('category.delete');


   //SUb Category Route List

   Route::get('/sub/view',[SubCategoryController::class,'SubCategoryView'])->name('all.subcategory');
   Route::get('/sub/create',[SubCategoryController::class,'SubCategoryCreate'])->name('subcategory.create');
   Route::post('/sub/store',[SubCategoryController::class,'SubCategoryStore'])->name('subcategory.store');
   Route::get('/sub/edit/{id}',[SubCategoryController::class,'SubCategoryEdit'])->name('subcategory.edit');
   Route::post('/sub/update',[SubCategoryController::class,'SubCategoryUpdate'])->name('subcategory.update');
   Route::get('/sub/delete/{id}',[SubCategoryController::class,'SubCategoryDelete'])->name('subcategory.delete');
   


});
