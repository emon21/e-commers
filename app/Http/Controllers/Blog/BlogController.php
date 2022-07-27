<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogPost;
use App\Models\Blog\BlogSubCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{

   // ===================== Categories function Start =====================

   public function CategoryView()
   {
      $blog_category = BlogCategory::latest()->get();
      return view('admin.blog.category.category_view',compact('blog_category'));
   }

   public function CategoryAdd()
   {
   
      return view('admin.blog.category.category_create');
   }

   public function CategoryStore(Request $request)
   {
      
      BlogCategory::create([
         'category_name' => $request->category_name,
     ]);

     $notification = array(
      'message' => 'Blog Category Created Successfully',
      'alert-type' => 'success',
   );

   return redirect()->route('blog.category.all')->with($notification);
    
   }

   public function CategoryDelete($id)
   {
      $blog_category = BlogCategory::findOrFail($id);
      $blog_category->delete();
      $notification = array(
         'message' => 'Blog Category Delete Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('blog.category.all')->with($notification);
       
   }

   // ===================== Categories function End =====================


   // ===================== SubCategories function Start =====================

   public function SubCategoryView()
   {
      //$subcategories = BlogSubCategory::With('category')->latest()->get();
      $subcategories = BlogSubCategory::latest()->get();
     // return $subcategories;
      return view('admin.blog.SubCategory.sub_category_view',compact('subcategories'));
   }

   public function SubCategoryAdd()
   {
      $blog_category = BlogCategory::latest()->get();
      return view('admin.blog.SubCategory.sub_category_add',compact('blog_category'));  
   }

   public function SubCategoryStore(Request $request)
   {
     $subcategory = BlogSubCategory::create([
         'category_id' => $request->category_id,
         'sub_category_name' => $request->sub_subcategory,
     ]);

     $notification = array(
      'message' => 'Blog Sub Category Created Successfully',
      'alert-type' => 'success',
   );

   return redirect()->route('blog.subcategory.all')->with($notification);
    
   }

   // ===================== Sub Categories function End =====================

   
   
   // ===================== Tag function Start =====================


   public function TagView()
   {
      return 123;
   }
   
   // ===================== Tag function End =====================

   

   // ===================== Post function Start =====================

   public function PostView()
   {
      $posts = BlogPost::latest()->get();
      return view('admin.blog.post.post_view',compact('posts'));
   }
   
     // ===================== Post function End =====================
}
