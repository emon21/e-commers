<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\UserDashboard;
use App\Http\Controllers\User\WishListController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\CartController AS Cart;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\AllUserController;
use App\Models\Product;
use GuzzleHttp\Middleware;
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

Route::get('/last', function () {

   $code = 'Emon-3';

   if ($code) {
       $code_array = explode("-", $code);
       if ($code_array) {
           $last_one = array_splice($code_array, -1);
       }
       $final_code = implode(" ", $last_one);
       $final_string = implode(" ", $code_array);
       $final_code = $final_string .'-'.$final_code+1;

       return $final_code;
   }
});


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


// ===================================  User Route  Start ===================================

Route::middleware(['auth'])->group(function (){

   Route::get('/user/dashboard', [UserDashboard::class, 'dashboard'])->name('user.dashboard');
 
});


// ===================================  User Route End ===================================

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

   //Admin SUb Category Route List

   Route::get('/sub/view',[SubCategoryController::class,'SubCategoryView'])->name('all.subcategory');
   Route::get('/sub/create',[SubCategoryController::class,'SubCategoryCreate'])->name('subcategory.create');
   Route::post('/sub/store',[SubCategoryController::class,'SubCategoryStore'])->name('subcategory.store');
   Route::get('/sub/edit/{id}',[SubCategoryController::class,'SubCategoryEdit'])->name('subcategory.edit');
   Route::post('/sub/update',[SubCategoryController::class,'SubCategoryUpdate'])->name('subcategory.update');
   Route::get('/sub/delete/{id}',[SubCategoryController::class,'SubCategoryDelete'])->name('subcategory.delete');


//Admin Sub SUb Category Route List

Route::get('/sub/sub/view',[SubCategoryController::class,'SubSubCategoryView'])->name('all.subsubcategory');

Route::get('/sub/sub/create',[SubCategoryController::class,'SubSubCategoryCreate'])->name('sub.subsubcategory.create');

//subcategory ajax url
Route::get('/subcategory/{category_id}',[SubCategoryController::class,'GetSubCategory']);

//Sub subcategory ajax url
Route::get('/sub-subcategory/ajax/{subcategory_id}',[SubCategoryController::class,'GetSubSubCategory']);

Route::post('/sub/sub/store',[SubCategoryController::class,'SubSubCategoryStore'])->name('subsubsubcategory.store');

Route::get('/sub/sub/edit/{editID}',[SubCategoryController::class,'SubSubCategoryEdit'])->name('subsubcategory.edit');

Route::post('/sub/sub/update',[SubCategoryController::class,'SubSubCategoryUpdate'])->name('subsubcategory.update');

//deletet data
Route::get('/sub/sub/delete/{deleteID}',[SubCategoryController::class,'SubSubCategoryDelete'])->name('subsubcategory.delete');

});


//Admin Product all route
Route::prefix('product')->group(function(){

   Route::get('/add',[ProductController::class,'AddProduct'])->name('add-product');
   Route::post('/store',[ProductController::class,'ProductStore'])->name('product-store');
   Route::get('/manage',[ProductController::class,'ManageProduct'])->name('manage-product');
   Route::get('/edit/{id}',[ProductController::class,'EditProduct'])->name('edit-product');
   Route::post('/update',[ProductController::class,'UpdateProduct'])->name('product-update');
   Route::post('/image/update',[ProductController::class,'MultiImageUpdate'])->name('update-product-image');
   Route::post('/thambnail/update',[ProductController::class,'ThambnailImageUpdate'])->name('update-product-thambnail');
   Route::get('/multiimg/delete/{id}',[ProductController::class,'MultiImageDelete'])->name('product.multiimg.delete');
   Route::get('active/{id}',[ProductController::class,'ProductInactive'])->name('product.active');
   Route::get('inactive/{id}',[ProductController::class,'ProductActive'])->name('product.inactive');
   Route::get('delete/{id}',[ProductController::class,'ProductDelete'])->name('product.delete');
   Route::get('details/{id}',[ProductController::class,'ProductDetails'])->name('product.details');


});



//Admin Slider all route
Route::prefix('slider')->group(function(){

   Route::get('/view',[SliderController::class,'SliderView'])->name('all.slider');
   Route::get('/add',[SliderController::class,'SliderAdd'])->name('slider-add');
   Route::post('/store',[SliderController::class,'SliderStore'])->name('slider-store');
   Route::get('/edit/{id}',[SliderController::class,'SliderEdit'])->name('slider-edit');
   Route::post('/update',[SliderController::class,'SliderUpdate'])->name('slider-update');
   Route::get('delete/{id}',[SliderController::class,'SliderDelete'])->name('slider.delete');

   Route::get('inactive/{id}',[SliderController::class,'SliderInactive'])->name('slider.inactive');
   Route::get('active/{id}',[SliderController::class,'SliderActive'])->name('slider.active');
  

});



//Frontend Product Details
Route::get('product/details/{id}/{slug}',[IndexController::class,'ProductDetails']);

//Frontend Product Tag
Route::get('product/tag/{tag}',[IndexController::class,'TagWishProduct']);

//Frontend subcategory wash data
Route::get('subcategory/product/{subcat_id}/{slug}',[IndexController::class,'SubCatWishProduct']);

//Frontend Sub-subcategory wash data
Route::get('subsubcategory/product/{subsubcat_id}/{slug}',[IndexController::class,'SubSubCatWishProduct']);

//Product View Modal With Ajax
Route::get('product/view/modal/{id}',[IndexController::class,'ProductViewAjax']);

//Add To Cart Store Data
Route::post('/cart/data/store/{id}',[CartController::class,'AddToCart']);

// Get Data from mini cart
Route::get('/product/mini/cart', [CartController::class, 'AddMiniCart']);

// Remove mini cart
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

// Add to Wishlist
Route::post('/add-to-wishlist/{product_id}', [CartController::class, 'AddToWishlist']);


Route::group(['prefix' => 'user','middleware' => ['user','auth'],'namespace' => 'user' ],function(){

  
   // Wishlist Product
   Route::get('/wishlist', [WishListController::class, 'wishlist'])->name('wishlist');
  

   // Wishlist Product get
   Route::get('/get-wishlist-product', [WishListController::class, 'GetWishList']);

   // Wishlist Product remove
   Route::get('/wishlist-remove/{id}', [WishListController::class, 'WishlistRemoveProduct']);

   // My Cart Product
// Route::get('/mycart', [CartPageController::class, 'MyCart'])->name('mycart');
// //get cart product
// Route::get('/get-cart-product', [CartPageController::class, 'GetCartProduct']);
// //remove cart
// Route::get('/cart-remove/{rowId}', [CartPageController::class, 'RemoveCartProduct']);

// Route::get('/order-details', [Cart::class, 'OrderDetails'])->name('order-details');
Route::get('/my-order', [AllUserController::class, 'MyOrder'])->name('my.order');
Route::get('/order-details/{order_id}', [AllUserController::class, 'OrderDetails']);

//invoice generate
Route::get('/invoice_download/{order_id}', [AllUserController::class, 'InvoiceDownload']);

});


//My Cart Page All Route
Route::get('/mycart', [CartPageController::class, 'MyCart'])->name('mycart');
//get cart product
Route::get('/user/get-cart-product', [CartPageController::class, 'GetCartProduct']);
//remove cart
Route::get('/user/cart-remove/{rowId}', [CartPageController::class, 'RemoveCartProduct']);

Route::get('cart-increment/{rowId}', [CartPageController::class, 'CartIncrement']);

Route::get('cart-decrement/{rowId}', [CartPageController::class, 'CartDecrement']);

//Checvkout Route

Route::get('checkout', [Cart::class, 'CheckoutCreate'])->name('checkout');

Route::post('checkout/store', [Cart::class, 'CheckoutStore'])->name('checkout.store');

Route::post('cash/order', [Cart::class, 'cashOrder'])->name('cash.order');


Route::group(['prefix' => 'user',  'middleware' => 'auth'], function()
{
    //All the routes that belongs to the group goes here
   //  Route::get('/wishlist', [WishListController::class, 'wishlist'])->name('wishlist');
});



//brand all route
Route::prefix('blog')->group(function(){
  
   //category route List
   Route::get('/category/view',[BlogController::class,'CategoryView'])->name('blog.category.all');
   Route::get('/category/add',[BlogController::class,'CategoryAdd'])->name('blog.category.add');
   Route::post('/category/store',[BlogController::class,'CategoryStore'])->name('blog.category.store');
   Route::get('/category/delete/{id}',[BlogController::class,'CategoryDelete'])->name('blog.category.delete');
   
   //Sub category route List
   Route::get('/subcategory/view',[BlogController::class,'SubCategoryView'])->name('blog.subcategory.all');
   Route::get('/subcategory/add',[BlogController::class,'SubCategoryAdd'])->name('blog.subcategory.add');
   Route::post('/subcategory/store',[BlogController::class,'SubCategoryStore'])->name('blog.subcategory.store');

    //Post route List
    Route::get('/view',[BlogController::class,'PostView'])->name('post.all');

   //Tag route List
   Route::get('/tag/view',[BlogController::class,'TagView'])->name('tag.all');
   

   // Route::get('/create',[BrandController::class,'BrandCreate'])->name('brand.create');
   // Route::post('/store',[BrandController::class,'BrandStore'])->name('brand.store');
   // Route::get('/edit/{brand}',[BrandController::class,'BrandEdit'])->name('brand.edit');
   // Route::post('/update',[BrandController::class,'BrandUpdate'])->name('brand.update');
   // Route::get('/delete/{id}',[BrandController::class,'BrandDelete'])->name('brand.delete');

});


