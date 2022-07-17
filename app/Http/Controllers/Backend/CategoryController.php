<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function CategoryView()
    {
      $category = Category::latest()->get();
      return view('admin.category.category_view',compact('category'));
    }

    public function CategoryCreate()
    {
      return view('admin.category.category_create');
    }

    public function CategoryStore(Request $request)
    {
      
      //validation Brand
      $this->validate($request,[
         'category_name_en' => 'required',
         'category_name_hin' => "required",
         'category_icon' => 'required',
      ]);

     Category::create([
         'category_name_en' => $request->category_name_en,
         'category_slug_en' => Str::slug($request->category_name_en),
         'category_name_hin' => $request->category_name_hin,
         'category_slug_hin' => Str::slug($request->category_name_hin),
         'category_icon' => $request->category_icon,
      ]);

      $notification = array(
         'message' => 'Category Created Successfully Done',
         'alert-type' => 'success',
      );

      return redirect()->route('all.category')->with($notification);

    }

    public function CategoryEdit($id)
    {
      $category = Category::findOrFail($id);
      return view('admin.category.category_edit',compact('category'));

    }

    public function CategoryUpdate(Request $request)
    {
      $cat_id = $request->id; 
      Category::findOrFail($cat_id)->update([
         'category_name_en' => $request->category_name_en,
         'category_slug_en' => Str::slug($request->category_name_en),
         'category_name_hin' => $request->category_name_hin,
         'category_slug_hin' => Str::slug($request->category_name_hin),
         'category_icon' => $request->category_icon,
      ]);

      $notification = array(
         'message' => 'Category Updated Successfully',
         'alert-type' => 'success',
      );

      return redirect()->route('all.category')->with($notification);


    }

    public function CategoryDelete($id)
    {
    
    Category::findOrFail($id)->delete();
 
       $notification = array(
          'message' => 'Category Deleted Successfully',
          'alert-type' => 'warning'
       );
       
       return redirect()->route('all.category')->with($notification);
    }
}
