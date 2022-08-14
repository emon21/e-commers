<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;


class SliderController extends Controller
{
    public function SliderView()
    {
      $sliders = Slider::latest()->get();
      return view('admin.slider.slider_manage',compact('sliders'));
    }

    public function SliderAdd()
    {
      return view('admin.slider.slider_add');
      
    }

    public function SliderStore(Request $request)
    {
      
      //featured image uploads
      $image = $request->file('slider_img');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('upload/slider/'),$save_url); 
      $upload_path = 'upload/slider/'.$save_url;
      $product = Slider::insertGetId([
         'title' => $request->slider_name,
         'description' => $request->slider_desc,
         'slider_img' => $upload_path,
         'status' => $request->status,
   ]);

   $notification = array(
      'message' => 'Slider Created Successfully',
      'alert-type' => 'success',
   );

   return redirect()->route('all.slider')->with($notification);
    }


     public function SliderEdit($id)
    {

      $slider = Slider::findOrFail($id);
      return view('admin.slider.slider_edit',compact('slider'));
      
    }

     public function SliderUpdate(Request $request)
    {
      $slider_id = $request->id;
      $old_image = $request->old_img; 

      if($request->hasFile('slider_img')) { 
         //exites Images deleted
         unlink($old_image);

         $image = $request->file('slider_img');
         $save_url = time() . '.' .$image->getClientOriginalextension();
         $image->move(public_path('upload/slider/'),$save_url); 
         $upload_path = 'upload/slider/'.$save_url;

         Slider::findOrFail($slider_id)->update([
            'title' => $request->slider_name,
            'description' => $request->slider_desc,
            'slider_img' => $upload_path,
            'status' => $request->status,
         ]);

      }

      else{
         Slider::findOrFail($slider_id)->update([
            'title' => $request->slider_name,
            'description' => $request->slider_desc,
            'status' => $request->status,
               // '' => $req->brand_image,
         ]);
      }

      $notification = array(
         'message' => 'Slider Updated Successfully',
         'alert-type' => 'success',
      );
      return redirect()->route('all.slider')->with($notification);

    }

    public function SliderDelete($id)
    {
      
      $slider = Slider::findOrFail($id);
      unlink($slider->slider_img);
      Slider::findOrFail($id)->delete();

      $notification = array(
         'message' => 'Slider Deleted Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('all.slider')->with($notification);

    }


    public function SliderActive($id)
    {
      Slider::findOrFail($id)->update(['status' => 1]);
      $notification = array(
         'message' => 'Slider Status Active Updated Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('all.slider')->with($notification);
    }

    public function SliderInactive($id)
    {
      Slider::findOrFail($id)->update(['status' => 0]);
      $notification = array(
         'message' => 'Slider Status Inactive Updated Successfully',
         'alert-type' => 'success',
      );
   
      return redirect()->route('all.slider')->with($notification);
    }
}
