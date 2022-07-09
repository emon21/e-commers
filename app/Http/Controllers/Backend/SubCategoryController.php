<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    public function SubCategoryView()
    {
      $subcategory = SubCategory::latest()->get();
      return view('admin.category.subcategory_view',compact('subcategory'));
      
    }

    public function SubCategoryCreate()
    {
      $categories = Category::orderBy('category_name_en','ASC')->get();
      return view('admin.category.subcategory_create',compact('categories'));
      
    }

    public function SubCategoryStore(Request $request)
    {
      //validation Brand
      $this->validate($request,[
         'subcategory_name_en' => 'required',
         'subcategory_name_hin' => "required",
         'category_id' => 'required',
      ],
      //Custom Validation
      [
         'category_id.required' => 'Please select any option',
         'subcategory_name_en.required' => 'Input SubCategory English Name',
      ]);

      SubCategory::create([
         'subcategory_name_en' => $request->subcategory_name_en,
         'subcategory_slug_en' => Str::slug($request->subcategory_name_en),
         'subcategory_name_hin' => $request->subcategory_name_hin,
         'subcategory_slug_hin' => Str::slug($request->subcategory_name_hin),
         'category_id' => $request->category_id,
      ]);

      $notification = array(
         'message' => 'SubCategory Created Successfully',
         'alert-type' => 'success',
      );

      return redirect()->route('all.subcategory')->with($notification);

    }

    public function SubCategoryEdit($id)
    {
     // return $id;
     $categories = Category::orderBy('category_name_en','ASC')->get();
     $subcategory = SubCategory::findOrFail($id);

      return view('admin.category.subcategory_edit',compact('categories','subcategory'));
      
    }

    public function SubCategoryUpdate(Request $request)
    {
      $subcat_id = $request->id;

      SubCategory::findOrFail($subcat_id)->update([
         'subcategory_name_en' => $request->subcategory_name_en,
         'subcategory_slug_en' => Str::slug($request->subcategory_name_en),
         'subcategory_name_hin' => $request->subcategory_name_hin,
         'subcategory_slug_hin' => Str::slug($request->subcategory_name_hin),
         'category_id' => $request->category_id,
      ]);
   
      $notification = array(
         'message' => 'SubCategory Updated Successfully',
         'alert-type' => 'info',
      );

      return redirect()->route('all.subcategory')->with($notification);

    }

    public function SubCategoryDelete($id)
    {
      SubCategory::findOrFail($id)->delete();
      $notification = array(
         'message' => 'SubCategory Deleted Successfully',
         'alert-type' => 'warning',
      );

      return redirect()->route('all.subcategory')->with($notification);

      
    }
}
