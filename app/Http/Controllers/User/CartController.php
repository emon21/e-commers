<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function CheckoutCreate()
    {
      
      if (Auth::check()) {
         if (Cart::total() > 0) {

            $carts = Cart::content();
            $cartQty = Cart::count();
            $cartTotal = Cart::total();

            return view('frontend.checkout.checkout_view',compact('carts','cartQty','cartTotal'));
         }
         else{
            $notification = array(
               'message' => 'Shopping At List One product ',
               'alert-type' => 'error',
            );
            return redirect()->to('/')->with($notification);
         }
      }
      else{

         $notification = array(
            'message' => 'You Need to Login First',
            'alert-type' => 'error',
         );
         return redirect()->route('login')->with($notification);

      }


    
    }

    public function CheckoutStore(Request $request)
    {
      
     
      $carts = Cart::content();
      $cartQty = Cart::count();
      $cartTotal = Cart::total();
       
      $data = array();
      $data['shipping_name'] = $request->shipping_name;
      $data['shipping_email'] = $request->shipping_email;
      $data['shipping_phone'] = $request->shipping_phone;
      $data['post_code'] = $request->post_code;
      $data['address'] = $request->address;
      $data['notes'] = $request->notes;

      if ($request->payment_method == 'stripe') {
        return view('frontend.payment.stripe',compact('data'));
      }
      elseif($request->payment_method == 'card'){
         return view('frontend.payment.card',compact('data'));
      }
      else{
         return view('frontend.payment.cod',compact('data','carts','cartQty','cartTotal'));


      }
    
    }

    public function cashOrder(Request $request)
    {
      $order_id = Order::insertGetId([
         'user_id' =>Auth::id(),
         'name' =>$request->name,
         'email' =>$request->email,
         'phone' =>$request->phone,
         'post_code' =>$request->post_code,
         'address' =>$request->address,
         'notes' =>$request->notes,
         'payment_type' =>'cod',
         'payment_method' =>'cod',
         'transaction' =>$request->id,
         'currency' =>$request->id,
         'amount' =>$request->id,
         'order_number' =>$request->id,
         'invoice_no' =>$request->id,
         'order_date' =>$request->id,
         'order_month' =>$request->id,
         'order_year' =>$request->id,
         'confirmed_date' =>$request->id,
         'processing_date' =>$request->id,
         'picked_date' =>$request->id,
         'shipped_date' =>$request->id,
         'delivered_date' =>$request->id,
         'cancel_date' =>$request->id,
         'return_date' =>$request->id,
         'return_reason' =>$request->id,
         'status' =>$request->id,

      ]);



    }
}
