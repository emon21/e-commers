<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\MultiImg;
use App\Models\Product;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function AddProduct()
    {

     // $pro = 1;
   //   for ($x = 0; $x <= 10; $x++) {
   //   // return "The number is: $x <br>";
     
   //  }

        // hexdec(uniqid()).'.'.$image->getClientOriginalextension();

   
      //   return rand(100000,999999); 
     
     
      
      $categories = Category::latest()->get();
      $brands = Brand::latest()->get();

      $x = "product";
      //$code = rand('abc-',10000 , 99999);
      $product_code = rand(100000,999999);
      $product = ucfirst($x).' - '.$product_code;
     // return $product;

      return view('admin.product.product_add',compact('categories','brands','product'));
    }

    public function ProductStore(Request $request)
    {
       // return $request->all();
     
      //featured image uploads
      $image = $request->file('feature_img');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('upload/product/'),$save_url); 
      $img_url = 'upload/product/'.$save_url;

      $product = Product::insertGetId([

            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name_en' => $request->product_name_en,
            'product_slug_en' => Str::slug($request->product_name_en),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_size_en' => $request->product_size_en,
            'product_color_en' => $request->product_color_en,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_desc_en' => $request->short_desc_en,
            'long_desc_en' => $request->long_desc_en,
            'product_thambnil' => $img_url,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'status' => $request->status,

      ]);

      // if($request->hasFile('feature_img')) { 
      //    $image = $request->file('feature_img');
      //    // hexdec(uniqid()).'.'.$image->getClientOriginalextension();
      //    $filename = time() . '.' .$image->getClientOriginalextension();
      //    $image->move(public_path('upload/product/'),$filename); 
      //    $product->product_thambnil = 'upload/product/'.$filename;
      //    $product->save();

      //   // $product_url = 'upload/product/'.$filename;
      //   // $product->product_thambnil = $product_url;
      //    // $product->product_thambnil = 'upload/product/'.$filename;
      //    // $product->save();
      // }

  

      // Multiple Image Upload start

      $images = $request->file('multi_img');
      foreach ($images as $img) {
         $img_name = time().hexdec(uniqid()).'.'.$img->getClientOriginalextension();
         $img->move(public_path('upload/product/multi-img/'),$img_name); 
         $img_url = 'upload/product/multi-img/'.$img_name;
         //$product->product_thambnil = 'upload/product/multi-img'.$img_name;
         MultiImg::insert([
            'product_id' => $product,
            'photo_name' => $img_url,
         ]);
      }

      // Multiple Image Upload end


      $notification = array(
         'message' => 'Product Created Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('add-product')->with($notification);
    }

    public function ManageProduct()
    {
      $products = Product::latest()->get();
      return view('admin.product.product_view',compact('products'));
    }
    }
}
