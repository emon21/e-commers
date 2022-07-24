<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function wishlist()
    {

      return view('frontend.wishlist.wishlist_view');
    }

    public function GetWishList()
    {
      $wishlist = WishList::with('product')->where('user_id',Auth::id())->latest()->get();
      return response()->json($wishlist);
    }

    public function WishlistRemoveProduct($id)
    {
      WishList::where('user_id',Auth::id())->where('id',$id)->delete();
      return response()->json(['error' => 'Product Remove  On Your Wishlist']);

      
    }
}
