<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\WishList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function AddToCart(Request $request,$id)
    {
      $product = Product::findOrFail($id);
      if ($product->discount_price == NULL) {
         Cart::add([
            'id' => $id, 
            'name' => $request->product_name, 
            'qty' => $request->quantity, 
            'price' => $product->selling_price,
            'total' => $request->quantity *$product->selling_price,
            'weight' => 1, 
            'options' => [
               'image' => $product->product_thambnil,
               'color' => $request->color,
               'size' => $request->size,
            ],
         ]);
      
         return response()->json(['success' => 'Successfully Added on Your Cart']);
      
      }
      else{

         Cart::add([
            'id' => $id, 
            'name' => $request->product_name, 
            'qty' => $request->quantity, 
            'price' => $product->discount_price,
            'weight' => 1, 
            'options' => [
               'image' => $product->product_thambnil,
               'color' => $request->color,
               'size' => $request->size,
            ],
         ]);
         return response()->json(['success' => 'Successfully Added on Your Cart']);
      }

    }

    //Mini Cart Section
    public function AddMiniCart(){

      $carts = Cart::content();
      $cartQty = Cart::count();
      $cartTotal = Cart::total();

      return response()->json(array(
         'carts' => $carts,
         'cartQty' => $cartQty,
         'cartTotal' => $cartTotal,
        // 'cartTotal' => round($cartTotal),

      ));
   } // end method

   /// remove mini cart 
   public function RemoveMiniCart($rowId){
      Cart::remove($rowId);
      return response()->json(['success' => 'Product Remove from Cart']);

   } // end mehtod 

   //product wishlist into user
   public function AddToWishlist(Request $request, $product_id){

      if (Auth::check()) {
      $exists = Wishlist::where('user_id',Auth::id())->where('product_id',$product_id)->first();
      
            if (!$exists) {
               Wishlist::insert([
               'user_id' => Auth::id(), 
               'product_id' => $product_id, 
               'created_at' => Carbon::now(), 
            ]);
         return response()->json(['success' => 'Successfully Added On Your Wishlist']);

            }
            else{

               return response()->json(['error' => 'This Product has Already on Your Wishlist']);

            }            

   }else{

      return response()->json(['error' => 'At First Login Your Account']);

  }

   }
   
}
