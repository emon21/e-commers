<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogPost;
use App\Models\Blog\BlogSubCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog()
    {
      $posts = BlogPost::latest()->get();
      $popularpost = BlogPost::all()->take(2);
      $recentpost = BlogPost::latest()->take(2)->get();
      $categories = BlogCategory::latest()->get();
      //return $categories->id;

       return view('frontend.blog.blog_view',compact('posts','popularpost','recentpost','categories'));
    }

    public function BlogDetails($blog_id)
    {
      
      $post = BlogPost::where('id',$blog_id)->first();
      $popularpost = BlogPost::all()->take(2);
      $recentpost = BlogPost::latest()->take(2)->get();
      $categories = BlogCategory::latest()->get();
      return view('frontend.blog.blog_details',compact('post','popularpost','recentpost','categories'));
    }
}
