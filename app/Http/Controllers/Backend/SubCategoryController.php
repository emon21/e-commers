<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
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


  //That For SUB->SUBCATEGORY//

  public function SubSubCategoryView()
  {

     $categories= Category::orderBy('category_name_en','ASC')->get();
     $subsubcategory = SubSubCategory::latest()->get();
     return view('admin.category.sub_subcategory_view',compact('categories','subsubcategory'));


  }

  public function GetSubCategory($category_id)
  {
      $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name_en','ASC')->get();
      return json_encode($subcat);
  }

  public function SubSubCategoryCreate()
  {

   // $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name_en','ASC')->get();
   // return json_encode($subcat);
   $categories= Category::orderBy('category_name_en','ASC')->get();

    return view('admin.category.sub_subcategory_create',compact('categories'));
  }

  public function SubSubCategoryStore(Request $request)
  {

  // return $request->sub_subcategory_en;

   //validation Brand
   $this->validate($request,[
      'category_id' => 'required',
      'subcategory_id' => 'required',
      'sub_subcategory_en' => 'required',
      'sub_subcategory_hin' => "required",
   ],
   //Custom Validation
   [
      'category_id.required' => 'Please select any option',
      'sub_subcategory_en.required' => 'Input SubCategory English Name',
      
   ]);

   SubSubCategory::create([
      'category_id' => $request->category_id,
      'subcategory_id' => $request->subcategory_id,
      'sub_subcategory_name_en' => $request->sub_subcategory_en,
      'sub_subcategory_slug_en' => Str::slug($request->sub_subcategory_en),
      'sub_subcategory_name_hin' => $request->sub_subcategory_hin,
      'sub_subcategory_slug_hin' =>  Str::slug($request->sub_subcategory_hin),
   ]);

   $notification = array(
      'message' => 'Sub->SubCategory Created Successfully',
      'alert-type' => 'success',
   );

   return redirect()->route('all.subsubcategory')->with($notification);
  }

  public function SubSubCategoryEdit($editID)
  {
   $categories = Category::orderBy('category_name_en','ASC')->get();
   $subcategories = SubCategory::orderBy('subcategory_name_en','ASC')->get();
   $subsubcategories = SubSubCategory::findOrFail($editID);
   return view('admin.category.sub_subcategory_edit',compact('categories','subcategories','subsubcategories'));

   
  }

  public function SubSubCategoryUpdate(Request $request)
  {

   $subsubcategory_id = $request->EditId;

   SubSubCategory::findOrFail($subsubcategory_id)->update([
      'category_id' => $request->category_id,
      'subcategory_id' => $request->subcategory_id,
      'sub_subcategory_name_en' => $request->sub_subcategory_en,
      'sub_subcategory_slug_en' => Str::slug($request->sub_subcategory_en),
      'sub_subcategory_name_hin' => $request->sub_subcategory_hin,
      'sub_subcategory_slug_hin' =>  Str::slug($request->sub_subcategory_hin),
   ]);

   $notification = array(
      'message' => 'Sub->SubCategory Updated Successfully',
      'alert-type' => 'success',
   );

   return redirect()->route('all.subsubcategory')->with($notification);


  }

  public function SubSubCategoryDelete($deleteID)
  {
    SubSubCategory::findOrFail($deleteID)->delete();

   $notification = array(
      'message' => 'Sub->SubCategory Deleted Successfully',
      'alert-type' => 'success',
   );

   return redirect()->route('all.subsubcategory')->with($notification);

   

  }
}
