<?php

namespace App\Models\Blog;

use App\Models\Category;
use Dompdf\FrameDecorator\Block;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
      return $this->belongsTo(BlogCategory::class,'category_id','id');
    }
}
