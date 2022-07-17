<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];
   //  protected $fillable = [
   //    'category_id','subcategory_id','subcategory_name_en','subcategory_name_hin','subcategory_slug_en','subcategory_slug_hin'
   //        ];

   public function category(){
   return $this->belongsTo(Category::class,'category_id','id');
   }
          
   public function subcategory(){
   return $this->belongsTo(SubCategory::class,'subcategory_id','id');
   }
          
}
