<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogPost;
use App\Models\Blog\BlogSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

   public function GetSubCategory($category_id)
  {
      $subcat = BlogSubCategory::where('category_id',$category_id)->orderBy('sub_category_name','ASC')->get();
      return json_encode($subcat);
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

   public function PostCreate()
   {
      $categories = BlogCategory::latest()->get();
      $subcategories = BlogSubCategory::latest()->get();
      return view('admin.blog.post.post_create',compact('categories','subcategories'));
   }

   public function PostStore(Request $request)
   {
      //featured image uploads
      $image = $request->file('post_img');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('upload/blog/'),$save_url); 
      $img_url = 'upload/blog/'.$save_url;


      BlogPost::create([
         'category_id' => $request->category_id,
         'sub_category_id' => $request->subcategory_id,
         'tag_id' => '1',
         'blog_title' => $request->post_name,
         'blog_title_slug' => Str::slug($request->post_name),
         'blog_description' => $request->post_desc,
         'blog_img' => $img_url,
         'status' => $request->status,

   ]);

   $notification = array(
      'message' => 'Post Created Successfully',
      'alert-type' => 'success',
   );

   return redirect()->route('post.all')->with($notification);
      
   }
   
     // ===================== Post function End =====================
}
