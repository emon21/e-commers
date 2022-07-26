<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

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
      //return $carts;
       
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
      
      // $info = 'order';
      // $invoice_no = $info.'-'.rand(100000,999999);
     // return $invoice_no;
       $cartTotal = Cart::total();
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
        // 'transaction_id' =>$value->subtotal,
        // 'currency' =>$request->id,
         'amount' =>$cartTotal,
        // 'order_number' =>$orderid,
        // 'invoice_no' =>$invoice_no,
         'invoice_no' =>'EOS'.mt_rand(100000,999999),
         // 'order_date' =>$request->id,
         // 'order_month' =>$request->id,
         // 'order_year' =>$request->id,
         // 'confirmed_date' =>$request->id,
         // 'processing_date' =>$request->id,
         // 'picked_date' =>$request->id,
         // 'shipped_date' =>$request->id,
         // 'delivered_date' =>$request->id,
         // 'cancel_date' =>$request->id,
         // 'return_date' =>$request->id,
         // 'return_reason' =>$request->id,
         'status' =>'Pending',

      ]);

      //invoice send by mail
      $invoice = Order::findOrFail($order_id);
     // return $invoice;
      $data = [
         'invoice_no' => $invoice->invoice_no,
         'amount' =>$invoice->amount,
         'name' => $invoice->name,
          'email' => $invoice->email,
      ];

      Mail::to($request->email)->send(new OrderMail($data));
   

     $carts = Cart::content();
     foreach($carts as $cart){
      OrderItem::insert([
         'order_id' =>$order_id,
         'product_id' =>$cart->id,
         'color' =>$cart->options->color,
         'size' =>$cart->options->size,
         'qty' =>$cart->qty,
         'price' =>$cart->price,
        
      ]);
     }
    
     // return $invoice_no;
     // return $carts;
     // dd($request->all());
     

      Cart::destroy();

      $notification = array(
         'message' => 'Your Order Place Successfully',
         'alert-type' => 'success',
      );
      return redirect()->route('order-details')->with($notification);



    }

    public function OrderDetails()
    {
      $order = OrderItem::with('order','product')->get();
     // return $order;
      return view('frontend.order.order_details',compact('order'));
    }
}
