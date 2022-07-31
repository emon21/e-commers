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
use PDF;

class AllUserController extends Controller
{
    public function MyOrder()
    {
      $orders = Order::where('user_id',Auth::id())->orderBy('id','desc')->get();
      return view('user.my_order',compact('orders'));
    }

    public function OrderDetails($order_id)
    {
      // with('order','product')
      $order = Order::where('id',$order_id)->where('user_id',Auth::id())->first();
      $orderitem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','desc')->get();
     // return $orderitem;
      return view('user.order_details',compact('order','orderitem'));
    }

    public function InvoiceDownload($order_id)
    {

      $order = Order::where('id',$order_id)->where('user_id',Auth::id())->first();
      $orderitem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','desc')->get();
     // return $orderitem;
     // return view('user.order.order_invoice',compact('order','orderitem'));

      $pdf = PDF::loadView('user.order.order_invoice', compact('order','orderitem'));
      return $pdf->download('invoice.pdf');
    }
}
