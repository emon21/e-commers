<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function BrandView()
    {
      $brands = Brand::latest()->get();
      return view('admin.brand.index',compact('brands'));
    }

    public function BrandCreate()
    {
      return view('admin.brand.create');
    }

    public function BrandStore(request $req)
    {

      //validation Brand
      $this->validate($req,[
         'brand_name_en' => 'required',
         'brand_name_hin' => "required",
         'brand_image' => 'required|image',
      ]);

      
     // return $req->brand_image;
     // return $req->all();
      $brands = Brand::create([
         'brand_name_en' => $req->brand_name_en,
         'brand_slug_en' => Str::slug($req->brand_name_en),
         'brand_name_hin' => $req->brand_name_hin,
         'brand_slug_hin' => Str::slug($req->brand_name_hin),
         // '' => $req->brand_image,
      ]);

      if($req->hasFile('brand_image')) { 
         $image = $req->file('brand_image');
         $filename = time() . '.' .$image->getClientOriginalextension();
         $image->move(public_path('upload/brand/'), $filename); 
       //  $brands['brand_image'] = $filename;
        // $image->resize(300,300)->save('upload/brand/'.$filename);
         $brands->brand_image = 'upload/brand/'.$filename;
         $brands->save();
      }

      $notification = array(
         'message' => 'Brand Created Successfully Done','Brand',
         'alert-type' => 'success',
         'positionClass'=> 'toast-top-right',
         'progressBar' => true
      );

     // Toastr::success('Admin Profile Changed Successfully', 'Admin', ["positionClass" => "toast-top-right","progressBar" => true,]);

      return redirect()->route('all.brand')->with($notification);

    }

    //Brand Edit
    public function BrandEdit($brand)
    {
      $brand = Brand::findOrFail($brand);
      return view('admin.brand.edit',compact('brand'));

    }

    //Brand Update
    public function BrandUpdate(Request $request)
    {

      $brand_id = $request->id; 
      $old_image = $request->old_image; 

      if($request->hasFile('brand_image')) { 
         //exites Images deleted
         unlink($old_image);
         $image = $request->file('brand_image');
         $filename = time() . '.' .$image->getClientOriginalextension();
         $image->move(public_path('upload/brand/'), $filename); 
       //  $brands['brand_image'] = $filename;
        // $image->resize(300,300)->save('upload/brand/'.$filename);
         $location = 'upload/brand/'.$filename;

         Brand::findOrFail($brand_id)->update([
            'brand_name_en' => $request->brand_name_en,
            'brand_slug_en' => Str::slug($request->brand_name_en),
            'brand_name_hin' => $request->brand_name_hin,
            'brand_slug_hin' => Str::slug($request->brand_name_hin),
            'brand_image' => $location
            // '' => $req->brand_image,
         ]);

         $notification = array(
            'message' => 'Brand Updated Successfully Done','Brand',
            'alert-type' => 'info',
          );

         return redirect()->route('all.brand')->with($notification);
      }
         else{

            Brand::findOrFail($brand_id)->update([
               'brand_name_en' => $request->brand_name_en,
               'brand_slug_en' => Str::slug($request->brand_name_en),
               'brand_name_hin' => $request->brand_name_hin,
               'brand_slug_hin' => Str::slug($request->brand_name_hin),
               // '' => $req->brand_image,
            ]);
   
            $notification = array(
               'message' => 'Brand Created Successfully Done','Brand',
               'alert-type' => 'info',
             );
      
            return redirect()->route('all.brand')->with($notification);

         }
      
       


    }

    //Brand Delete
    public function BrandDelete($id)
    {
     // return $brand;

     $brand = Brand::findOrFail($id);
     $old_img = $brand->brand_image;
   //   if(file_exists($old_img)){
   // }
   
   unlink($old_img);
     Brand::findOrFail($id)->delete();

      $notification = array(
         'message' => 'Brand Deleted Successfully',
         'alert-type' => 'warning'
      );
      
      return redirect()->route('all.brand')->with($notification);

    }
}
