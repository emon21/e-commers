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
use Carbon\Carbon;
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
     // return $product;=

      return view('admin.product.product_add',compact('categories','brands','product'));
    }

    public function ProductStore(Request $request)
    {
     
      //featured image uploads
      $image = $request->file('feature_img');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('upload/product/'),$save_url); 
      $img_url = 'upload/product/'.$save_url;

      $last_product = Product::all()->last();
      $final_code =   'Product-12560';
   
      if($last_product){

         $code = $last_product->product_code;

         if ($code) {
            
             $code_array = explode("-", $code);

             if ($code_array) {
                 $last_one = array_splice($code_array, -1);
             }

             $final_code = implode(" ", $last_one);
             $final_string = implode(" ", $code_array);
             $final_code = $final_string .'-'.$final_code+1;

         // $code = $last_product->product_code;

         //    if ($code) {
         //        $code_array = explode("-", $code);
         //        if ($code_array) {
         //            $last_one = array_splice($code_array, -1);
         //        }
         //        $final_code = Str::slug(implode(" ", $last_one));
         //    }

         // $last_product_code = $last_product->product_code;
         }
      }

      $product = Product::insertGetId([

            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name_en' => $request->product_name_en,
            'product_slug_en' => Str::slug($request->product_name_en),
            'product_code' => $final_code,
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

//dd($productId);

  //  return $product_id = $product->id;

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
   
      return redirect()->route('manage-product')->with($notification);
    }

    public function ManageProduct()
    {
      $products = Product::latest()->get();
      //return $products;
      return view('admin.product.product_view',compact('products'));
    }
    public function EditProduct($id)
    {
      $multiImages = MultiImg::where('product_id',$id)->get();
      $categories = Category::latest()->get();
      $brands = Brand::latest()->get();
      $subcategory = SubCategory::latest()->get();
      $subsubcategory = SubSubCategory::latest()->get();
      $products = Product::findOrFail($id);
      return view('admin.product.product_edit',compact('categories','brands','subcategory','subsubcategory','products','multiImages'));
    }

    public function UpdateProduct(Request $request)
    {
      
      $product_id = $request->id;
      $pro = Product::findOrFail($product_id)->update([
         'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name_en' => $request->product_name_en,
            'product_slug_en' => Str::slug($request->product_name_en),
            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_size_en' => $request->product_size_en,
            'product_color_en' => $request->product_color_en,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_desc_en' => $request->short_desc_en,
            'long_desc_en' => $request->long_desc_en,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'status' => $request->status,
      ]);

      $notification = array(
         'message' => 'Product Updated Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('manage-product')->with($notification);

    }

    public function MultiImageUpdate(Request $request)
    {
      $imgs = $request->multi_img;
      foreach ($imgs as $id => $img) {
         $imgDelete = MultiImg::findOrFail($id);
         unlink($imgDelete->photo_name);

         $make_name = time().hexdec(uniqid()).'.'.$img->getClientOriginalextension();
         $img->move(public_path('upload/product/multi-img/'),$make_name); 
         $save_url = 'upload/product/multi-img/'.$make_name;
         MultiImg::where('id',$id)->update([
            'photo_name' =>$save_url,
            'updated_at' =>Carbon::now(),
         ]);
      
    }
    $notification = array(
      'message' => 'Product Image Updated Successfully',
      'alert-type' => 'info',
   );

   return redirect()->back()->with($notification);
    
   }

   public function ThambnailImageUpdate(Request $request)
   {
      $pro_id = $request->id;
      $oldImg = $request->old_img;
     // unlink($oldImg);
      if(file_exists($oldImg)){
         unlink($oldImg);
            }
            

      $image = $request->file('feature_img');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('upload/product/'),$save_url); 
      $save_url = 'upload/product/'.$save_url;

      Product::findOrFail($pro_id)->update([
         'product_thambnil' =>$save_url,
         'updated_at' =>Carbon::now(),
      ]);

      $notification = array(
         'message' => 'Product Image Thambnail Updated Successfully',
         'alert-type' => 'primary',
      );
   
      return redirect()->back()->with($notification);
   }

   public function MultiImageDelete($id)
   {
  
      $oldImg = MultiImg::findOrFail($id);
      unlink($oldImg->photo_name);
      MultiImg::findOrFail($id)->delete();
      $notification = array(
         'message' => 'Product Image Deleted Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->back()->with($notification);
   }

   public function ProductActive($id)
   {
      Product::findOrFail($id)->update(['status' => 0]);
      $notification = array(
         'message' => 'Product Statuas Inactive Updated Successfully',
         'alert-type' => 'error',
      );
   
      return redirect()->route('manage-product')->with($notification);
   }

   public function ProductInactive($id)
   {
      Product::findOrFail($id)->update(['status' => 1]);
      $notification = array(
         'message' => 'Product Statuas Active Updated Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('manage-product')->with($notification);
   }

   public function ProductDelete($id)
   {
      $product = Product::findOrFail($id);

      if(file_exists($product->product_thambnil)){
         unlink($product->product_thambnil);
            }

    //  unlink($product->product_thambnil);
      Product::findOrFail($id)->delete();

      $images = MultiImg::where('product_id',$id)->get();
      foreach ($images as $img) {

         unlink($img->photo_name);
         MultiImg::where('product_id',$id)->delete();
      }

      $notification = array(
         'message' => 'Product Deleted Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('manage-product')->with($notification);

   }

   public function ProductDetails($id)
   {
     // $products = Product::findOrFail($id);
     
      $multiImages = MultiImg::where('product_id',$id)->get();
      $products = Product::findOrFail($id);
      return view('admin.product.product_details',compact('products','multiImages'));

   }

   
}
